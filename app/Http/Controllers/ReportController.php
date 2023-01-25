<?php

namespace App\Http\Controllers;

use App\Models\kpdcRegister;
use App\Models\kpdcRegistrsGrup;
use App\Models\kpdcRegistrsInd;

class ReportController
{
    public function totalMeasuredValues()
    {
        $totalMeasuredValues = [];
        $MeasurementTypes = kpdcRegister::pluck('uzm_tips_vmf')->unique();

        foreach ($MeasurementTypes as $type) {
            $totalMeasuredValues[$type]['name'] = kpdcRegister::where('uzm_tips_vmf', $type)->first()->uzm_tips_vmf;
            $totalMeasuredValues[$type]['bruto'] = kpdcRegister::where('uzm_tips_vmf', $type)->sum('tilp_bruto');
            $totalMeasuredValues[$type]['neto'] = kpdcRegister::where('uzm_tips_vmf', $type)->sum('tilp_neto');
            $totalMeasuredValues[$type]['brakis'] = kpdcRegister::where('uzm_tips_vmf', $type)->sum('tilp_brakis');
        }

        return view('kop_uzm_tilp')
            ->with('totalMeasuredValues', $totalMeasuredValues);
    }

    public function sortimentValues()
    {
        $sortiments = kpdcRegistrsGrup::all()->map->only('tp_galva_id', 'sortiments')->unique()->toArray();

        foreach ($sortiments as $key => $sortiment) {
            $sortiments[$key]['bruto'] = kpdcRegister::where('id', $sortiment['tp_galva_id'])->value('tilp_bruto');
            $sortiments[$key]['neto'] = kpdcRegister::where('id', $sortiment['tp_galva_id'])->value('tilp_neto');
            $sortiments[$key]['brakis'] = kpdcRegister::where('id', $sortiment['tp_galva_id'])->value('tilp_brakis');
        }

        return view('sortimentValues')
            ->with('valuesBySortiment', $sortiments);
    }

    public function measuredValues()
    {
        $userDate = '2023-01-16';

        $allGalvaIDs = kpdcRegistrsInd::select('tp_galva_id')
            ->whereDate('datums_uzm', $userDate)
            ->pluck('tp_galva_id')
            ->toArray();

        foreach ($allGalvaIDs as $key => $value) {
            $array[$key] = kpdcRegister::where('id', $value)->value('vieta_nosaukums');
        }

        $array = array_filter($array);
        $count = array_count_values($array);

        return view('measuredValues')
            ->with('userDate', $userDate)
            ->with('valuesByDate', $count);
    }
}
