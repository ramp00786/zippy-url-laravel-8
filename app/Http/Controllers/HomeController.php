<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shortenUrl;
use App\Models\clickedUrl;
use App\Models\contact;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shortenUrlsActive = shortenUrl::where('status', 1)->orderBy('id', 'DESC')->get();
        $shortenUrlsDeactive = shortenUrl::where('status', 0)->orderBy('id', 'DESC')->get();

        $shortenUrls = shortenUrl::orderBy('id', 'DESC')->get();
        $clickedUrl = clickedUrl::orderBy('id', 'DESC')->get();
        $contactS = contact::orderBy('id', 'DESC')->get();
        return view('home')->with(['shortenUrls' => $shortenUrls, 'clickedUrl' => $clickedUrl, 'contactS' => $contactS, 'shortenUrlsActive' => $shortenUrlsActive, 'shortenUrlsDeactive' => $shortenUrlsDeactive]);
    }


    
    public function getHistory(Request $request){
        $shortenUrlHistory = shortenUrl::find($request->url_id);
        $clickedHistory = clickedUrl::where('url_id', $shortenUrlHistory->shortened_url)->orderBy('id', 'DESC')->get();
        
        ?>
            <h4><div style="word-wrap:break-word;">Original URL: <br/><b style="font-size:12px"><?php echo $shortenUrlHistory->original_url; ?></b></div></h4>
            <h4>Added link from:</h4>
            <table  class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>IP</th>
                        <th>Browser</th>
                        <th>OS</th>
                        <th>Device</th>
                        <th>Create at</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $shortenUrlHistory->ip_address; ?></td>
                        <td><?php echo $shortenUrlHistory->browser; ?></td>
                        <td><?php echo $shortenUrlHistory->os; ?></td>
                        <td><?php echo $shortenUrlHistory->device; ?></td>
                        <td><?php echo $shortenUrlHistory->created_at; ?></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h4>Total Clicked: <b><?php echo $clickedHistory->count(); ?></b></h4>

            <table id="example3" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>IP</th>
                        <th>Browser</th>
                        <th>OS</th>
                        <th>Device</th>
                        <th>Clicked at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($clickedHistory->count() > 0){
                        foreach($clickedHistory as $i => $h_row){ ?>
                            <tr>
                                <td><?php echo $i+1; ?></td>
                                <td><?php echo $h_row->ip_address; ?></td>
                                <td><?php echo $h_row->browser; ?></td>
                                <td><?php echo $h_row->os; ?></td>
                                <td><?php echo $h_row->device; ?></td>
                                <td><?php echo $h_row->created_at; ?></td>
                            </tr>
                        <?php
                        }
                    } ?>
                    
                </tbody>
            </table>

            <script>
            $(function () {
                $('#example3').DataTable();
            });
            </script>

        <?php

    }
}
