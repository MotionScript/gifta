<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\Backend\Trade;


class SalesChart extends BaseChart
{
 
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $btctrade = Trade::where('type', 'Bitcoin Trade')->where('status', 1)->sum('pay');
        $cardtrade = Trade::where('type', 'Card Trade')->where('status', 1)->sum('pay');
        $usdttrade = Trade::where('type', 'USDT Trade')->where('status', 1)->sum('pay');
        return Chartisan::build()
            ->labels(['Gift Card', 'Bitcoin', 'USDT'])
            
            ->dataset('Gift Card', [$cardtrade])
            ->dataset('Bitcoin', [$btctrade])
            ->dataset('USDT', [$usdttrade]);
            
    }
}