<?php

while($l = fgets(STDIN)){
    if(preg_match_all('|\-|u', $l)>6){
        echo $l;
    }
}
