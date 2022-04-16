@extends('layouts.app')
@section('tartalom')
<section class="al-section" id="rendDiv">
<header>

      <h1 class="text-center" style="flex: 1;">
    <?php
        $week = (int)date('W', strtotime("Today"));
        echo $week.". hét";
    ?>
    </h1>
    <div style="align-self: flex-start; flex: 0 0 1"></div>
</header>
    <table>
    <thead>
        <tr>
            <th></th>
            <th><?php echo date("M d", strtotime("next Week Monday")) ?><br>H</th>
            <th><?php echo date("M d", strtotime("next Week Tuesday")) ?><br>K</th>
            <th><?php echo date("M d", strtotime("next Week Wednesday")) ?><br>Sze</th>
            <th><?php echo date("M d", strtotime("next Week Thursday")) ?><br>Cs</th>
            <th><?php echo date("M d", strtotime("next Week Friday")) ?><br>P</th>
            <th><?php echo date("M d", strtotime("next Week Saturday")) ?><br>Szo</th>
            <th><?php echo date("M d", strtotime("next Week Sunday")) ?><br>V</th>
        </tr>
    </thead>
</table>
<table>
    <tbody>
        <?php



        $fixstartdate=strtotime("next Week Monday 08:00:00");
        $startdate=strtotime("next Week Monday 08:00:00");
        for ($i=0; $i < 8; $i++) {
            $enddate=strtotime("+1 weeks", $startdate);
            echo '<tr>';
                echo '<td class="ido">'.date('H:i', $fixstartdate) .'</td>';
            while ($startdate < $enddate) {
                $nowdate=false;
                foreach ($megrendeles as $value) {

                    if ($value->datumtol==date("Y-m-d H:i:s", $startdate) and $value->allapot!=="Törölve") {
                        $nowdate=True;
                    }
                }
                if ($nowdate==False) {
                    echo '<td class="idopont">'.date('Y-m-d H:i:s', $startdate) . "</td>";
                        $startdate = strtotime("+1 day", $startdate);
                }else {
                    echo '<td class="foglalt">'.date('Y-m-d H:i:s', $startdate) . "</td>";
                        $startdate = strtotime("+1 day", $startdate);
                }






            }
            echo '</tr>';
            $startdate=strtotime("+2 hour", $fixstartdate);
            $fixstartdate=strtotime("+2 hour", $fixstartdate);
        }
            ?>
</tbody>
      </table>
<br>
      <div class="text-center"><button class="button button-out" id="foglal" onclick="return confirm('Erősítse meg a foglalást!')">Foglalás</button></div>
</section>


@endsection
