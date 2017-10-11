@extends('layouts')

@section('title', '--- ')

@section('css')
    <link href="/css/session.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="section">

        <div class="section-header">
        Beginner sessions - 09/10/2017
        </div>

        <h1>Sign-ups</h1>
        <div class="session-signup">
            <div class="person" alt="Signed up: 10-10-2017 18:55:02"><div class="rank">1</div>Ellie Sanders</div>
            <div class="person"><div class="rank">2</div>Ernst Van Kerckvoorde</div>
            <div class="person"><div class="rank">3</div>Veryveryveryveryveryveryverylongname</div>
        </div>

        <h1>Wind</h1>
        <script src="https://widget.windguru.cz/js/wg_widget.php" type="text/javascript"></script>
        <script language="JavaScript" type="text/javascript">
        //<![CDATA[
        WgWidget({
        s: 2538, odh:0, doh:24, wj:'knots', tj:'c', waj:'m', fhours:72, lng:'en',
        params: ['WINDSPD','GUST','SMER','TMPE'],
        first_row:true,
        spotname:true,
        first_row_minfo:true,
        last_row:true,
        lat_lon:true,
        tz:true,
        sun:true,
        link_archive:false,
        link_new_window:false
        },
        'wg_target_div_2538_50734529'
        );
        //]]>
        </script>
        <div id="wg_target_div_2538_50734529"></div>

        <h1>Agenda</h1>
        <ol>
            <li>Meetup at the concourse</li>
            <li>20 mins binibus journey to the sailing club</li>
            <li>Briefing</li>
            <li>Get changed</li>
            <li>Windsurfing!!</li>
            <li>Pack away and shower</li>
            <li>Head back home</li>
        </ol>

        <h1>Things to bring</h1>
        <ol>
            <li>Wet shoes (Any shoes that you don't mind getting wet and dirty if you don't have a wetsuit boots)</li>
            <li>Wetsuit (Optional)</li>
            <li>Towel</li>
            <li>Snack (Optional)</li>
            <li>Money (trip cost)</li>
        </ol>
    </div>
@endsection
        