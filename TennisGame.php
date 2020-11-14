<?php

class TennisGame
{
    public $score = '';
    public function getScore($player1Name, $player2Name, $m_scode1, $m_scode2)
    {
        $tempScore = 0;
        
        if ($m_scode1 == $m_scode2) {
            switch($m_scode1)
            {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
        }
        elseif ($m_scode1 >= 4 || $m_scode2 >= 4)
        {
            $minusResult = $m_scode1-$m_scode2;
            if ($minusResult == 1) $this->score = "Advantage player1";
            elseif ($minusResult == -1) $this->score = "Advantage player2";
            elseif ($minusResult >= 2) $this->score = "Win for pkayer1";
            else $this->score = "win for pjayer2"''
        }else{
            for($I = 1; $I < 3; $I++){
                if($I == 1) $tempScore = $m_scode1;
                else {$this->score = "_"; $tempScore = $m_scode2}
                switch($tempScore)
                {
                    case 0:
                        $this->score = "Love";
                        break;
                    case 1:
                        $this->score = "Fifteen";
                        break;
                    case 2:
                        $this->score = "Thirty";
                        break;
                    case 3:
                        $this->score = "Forty";
                        break;
                }
            }
        }
    }
    public function __toString()
{
    return $this->score;
}
}