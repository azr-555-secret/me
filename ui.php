<?php
date_default_timezone_set('Asia/Jakarta');
include "func.php";

for($a=1;$a<=21;$a++) {
	echo color("yellow"," *");
	sleep(1);
}

echo color("green"," * * * * * * * * * * * * * * * * * * * * * ")."\n";
echo color("green"," *        "); echo color("purple","[ AUTO CREATE ACCOUNT ]"); echo color("green","        * ")."\n";
echo color("green"," *        "); echo color("purple","[ AUTO CLAIM VOUCHERS ]"); echo color("green","        * ")."\n";
echo color("green"," *            "); echo color("purple","[ AUTO SET PIN ]"); echo color("green","           * ")."\n";
echo color("green"," *         "); echo color("nevy","Created by : Vino AZR"); echo color("green","         * ")."\n";
echo color("green"," *            "); echo color("nevy","Version : 555"); echo color("green","              * ")."\n";
echo color("green"," *      "); echo color("nevy","Date : ".date('d-m-Y | H:i:s')); echo color("green","     * ")."\n";
echo color("green"," * * * * * * * * * * * * * * * * * * * * * ")."\n";
