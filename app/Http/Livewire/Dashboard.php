<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Workflow\Indicator;
use App\Models\Workflow\IncidentInformations;

class Dashboard extends Component
{
    
    public function render()
    {
        
        
        // INCIDENT SECTION 
        $incidentCounts = IncidentInformations::selectRaw('MONTH(date) as month, COUNT(*) as count')
            ->groupByRaw('MONTH(date)')
            ->orderByRaw('MONTH(date)')
            ->get();

        $months = [];
        $counts = [];

        foreach ($incidentCounts as $incidentCount) {
            $months[] = date('M', mktime(0, 0, 0, $incidentCount->month, 1)); // Convertissez le numéro du mois en nom du mois abrégé (Jan, Feb, etc.)
            $counts[] = $incidentCount->count;
        }

        // INDICATOR SECTION 
        $indicators = Indicator::all();
        $indicatorLabels = [];
        $indicatorSums = [];

        foreach ($indicators as $indicator) {
            $indicatorLabels[]=$indicator->indicator_type;
            $indicatorSums[] =$indicator->DataHistoriesSum(); // Utilisez la valeur par défaut 0 si la relation n'existe pas
        }

        //RANDOM GOOD PRACTICE
        $environmentalMessages = [
            "Reduce your water consumption by installing low-flow faucets and promptly fixing leaks.",
            "Optimize your workspace lighting using eco-friendly LED bulbs.",
            "Promote recycling by placing recycling bins throughout the company and raising employee awareness.",
            "Encourage carpooling or the use of public transportation to reduce greenhouse gas emissions.",
            "Use eco-friendly cleaning products to reduce environmental impact and protect workers' health.",
            "Plant trees and native plants around your business to improve air quality and create habitat for local wildlife.",
            "Implement a waste management system to minimize waste and recycle as much as possible.",
            "Turn off electronic devices when not in use to save energy and prolong their lifespan.",
            "Raise employee awareness about environmental best practices by organizing workshops and regular training sessions.",
            "Save paper by encouraging the use of email, electronic signatures, and online storage."
        ];
        $randomMessage = $environmentalMessages[array_rand($environmentalMessages)];

        $feed = \Feeds::make('https://news.un.org/feed/subscribe/en/news/topic/climate-change/feed/rss.xml');
        $dataRSS = array(
        'title'     => $feed->get_title(),
        'permalink' => $feed->get_permalink(),
        'items'     => $feed->get_items(),
        );

            
        $dataRSS['items'] = array_slice($dataRSS['items'], 0, 3);
        return view('livewire.dashboard', [
            'months' => $months, 
            'counts' => $counts,
            'indicatorLabels' => $indicatorLabels,
            'indicatorSums' => $indicatorSums,
            'randomMessage' => $randomMessage,
            'dataRSS' => $dataRSS,

        ]);
    }
}
