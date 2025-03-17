<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct(){

    }
 

    public function index(){

        $config = $this->config();

        $template = 'backend.dashboard.home.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config'
        ));
    }

    private function config() {
        return [
            'js' => [
                'backend-style/js/plugins/flot/jquery.flot.js',
                'backend-style/js/plugins/flot/jquery.flot.tooltip.min.js',
                'backend-style/js/plugins/flot/jquery.flot.spline.js',
                'backend-style/js/plugins/flot/jquery.flot.resize.js',
                'backend-style/js/plugins/flot/jquery.flot.pie.js',
                'backend-style/js/plugins/flot/jquery.flot.symbol.js',
                'backend-style/js/plugins/flot/jquery.flot.time.js',
                'backend-style/js/plugins/peity/jquery.peity.min.js',
                'backend-style/js/demo/peity-demo.js',
                'backend-style/js/inspinia.js',
                'backend-style/js/plugins/pace/pace.min.js',
                'backend-style/js/plugins/jquery-ui/jquery-ui.min.js',
                'backend-style/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
                'backend-style/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
                'backend-style/js/plugins/easypiechart/jquery.easypiechart.js',
                'backend-style/js/plugins/sparkline/jquery.sparkline.min.js',
                'backend-style/js/demo/sparkline-demo.js',
            ]
        ];
    }

}
