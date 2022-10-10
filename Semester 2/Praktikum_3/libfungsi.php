<?php
function Total($UAS, $UTS, $TUGAS){
    return ($UAS * 0.35) + ($UTS * 0.30) + ($TUGAS * 0.35);
}

function kelulusan($total){
    return $total > 55 ? "LULUS" : "TIDAK LULUS";
}

function Grade($total){
    if($total >= 85 and $total <= 100){
        return 'A';
    }elseif($total >= 70 and $total <= 84){
        return 'B';
    }elseif($total >= 56 and $total <= 69){
        return 'C';
    }elseif($total >= 36 and $total <= 55){
        return 'D';
    }elseif($total >= 0 and $total <= 35){
        return 'E';
    }else{
        return 'I';
    }
}

function Predikat ($grade){
    switch ($grade){
        case 'A':
            return 'Sangat Memuaskan';
            break;
        case 'B':
            return 'Memuaskan';
            break;
        case 'C':
            return 'Cukup';
            break;
        case 'D':
            return 'Kurang';
            break;
        case 'E':
            return 'Sangat Kurang';
            break;
        case 'I':
            return 'Tidak Ada Predikat';
            break;
    }
}
?>