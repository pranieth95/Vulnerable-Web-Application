<?php
	$playUserCookie = base64_decode($_GET['UsrReveal']);
	$userName = explode("-",$playUserCookie);
	$userInDate = explode("GMT",$userName[1]);
	$userIn = new DateTime(trim($userInDate[0]));
	$ref = $_SERVER['HTTP_REFERER'];
	$found = false;
	/*foreach (getallheaders() as $name => $value) { 
    	echo "$name: $value <br>"; 
	}
	echo " <br/> claude: ". $ref;*/
	$caseFlag = explode("|",$_GET['UsrReveal']);
	if(($caseFlag[1] =="BD892C88E9EF7BBA023A01CBB17887ABA6A64DCC902279CCE19A5C8E20EAC919")&&(strpos($ref, 'http://localhost/CISOColabNewPHP/login.php') !== FALSE)){
			if((strtolower(trim($userName[0])) != null)||($_GET['UsrReveal'] != null)){
				require_once('../../connect.php');
				$sql = "SELECT userName, timeEnter FROM challengerDetails";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				    	$dbUserDate = new DateTime(trim($row["timeEnter"]));
				        if((strtolower(trim($row["userName"])) == strtolower(trim($userName[0])))&&($userIn->format('Y-m-d H:i:sa')==$dbUserDate->format('Y-m-d H:i:sa'))){
				        	$found = true;

				        }
				    }
				} else {
				    $found = false;
				}
				if($found == true){
					$user = $userName[0];
					$inDate = $userIn->format('Y-m-d H:i:sa');
					$sqlUpdate = "UPDATE `challengerDetails` SET Hint1='Yes' WHERE userName="."'$user'"."and timeEnter ="."'$inDate'";
					if (mysqli_query($conn, $sqlUpdate)) {
					    echo '
						<div class="alert alert-dismissible alert-info">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Hints On!</strong> This <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjy3bbqu6bgAhXPeisKHWzKDu8QFjAAegQIABAC&url=https%3A%2F%2Fwww.owasp.org%2Findex.php%2FSQL_Injection&usg=AOvVaw33DCT2uMjpBVlujh7jfwRA" target="_blank" class="alert-link">vulnerable to SQL Injection</a>, Check it out from the Link.
						</div>
						';
					} else {
					    echo '
							<div class="alert alert-dismissible alert-warning">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <h4 class="alert-heading">Warning!</h4>
							  <p class="mb-0">Best check yo self, you are not looking too good.</p>
							</div>
						';
					}
					
				}
				$conn->close();
			}else{
				echo '
					<div class="alert alert-dismissible alert-warning">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <h4 class="alert-heading">Warning!</h4>
					  <p class="mb-0">Best check yo self, you are not looking too good.</p>
					</div>
				';
			}
	}else{
		if(($caseFlag[1] =="")&&(strpos($ref, 'http://localhost/CISOColabNewPHP/news_post.php') !== FALSE)){
			if((strtolower(trim($userName[0])) != null)||($_GET['UsrReveal'] != null)){
				require_once('../../connect.php');
				$sql = "SELECT userName, timeEnter FROM challengerDetails";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				    	$dbUserDate = new DateTime(trim($row["timeEnter"]));
				        if((strtolower(trim($row["userName"])) == strtolower(trim($userName[0])))&&($userIn->format('Y-m-d H:i:sa')==$dbUserDate->format('Y-m-d H:i:sa'))){
				        	$found = true;
				        }
				    }
				} else {
				    $found = false;
				}
				if($found == true){
					$user = $userName[0];
					$inDate = $userIn->format('Y-m-d H:i:sa');
					$sqlUpdate = "UPDATE `challengerDetails` SET Hint2='Yes' WHERE userName="."'$user'"."and timeEnter ="."'$inDate'";
					if (mysqli_query($conn, $sqlUpdate)) {
					    echo '
						<div class="alert alert-dismissible alert-info">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Hints On!</strong> This is <a href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)" target="_blank" class="alert-link">vulnerable to Cross Site Scripting</a>, Check it out from the Link.
						</div>
						';
					} else {
					    echo '
							<div class="alert alert-dismissible alert-warning">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <h4 class="alert-heading">Warning!</h4>
							  <p class="mb-0">Best check yo self, you are not looking too good my boy.</p>
							</div>
						';
					}
					
				}
				$conn->close();
			}else{
				echo '
					<div class="alert alert-dismissible alert-warning">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <h4 class="alert-heading">Warning!</h4>
					  <p class="mb-0">Best check yo self, you are not looking too good.</p>
					</div>
				';
			}
		}
		else{
			if(($caseFlag[1] =="F53EF5B1E24142C5BDB001942E32DD10641BACBECA17A7583220AB554D3595F7")&&(strpos($ref, 'http://localhost/CISOColabNewPHP/teachers.php') !== FALSE)){
				if((strtolower(trim($userName[0])) != null)||($_GET['UsrReveal'] != null)){
					require_once('../../connect.php');
					$sql = "SELECT userName, timeEnter FROM challengerDetails";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
					    	$dbUserDate = new DateTime(trim($row["timeEnter"]));
					        if((strtolower(trim($row["userName"])) == strtolower(trim($userName[0])))&&($userIn->format('Y-m-d H:i:sa')==$dbUserDate->format('Y-m-d H:i:sa'))){
					        	$found = true;
					        }
					    }
					} else {
					    $found = false;
					}
					if($found == true){
						$user = $userName[0];
						$inDate = $userIn->format('Y-m-d H:i:sa');
						$sqlUpdate = "UPDATE `challengerDetails` SET Hint3='Yes' WHERE userName="."'$user'"."and timeEnter ="."'$inDate'";
						if (mysqli_query($conn, $sqlUpdate)) {
						    echo '
							<div class="alert alert-dismissible alert-info">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Hints On!</strong> This is <a href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)" target="_blank" class="alert-link">vulnerable to Cross Site Scripting</a>, Check it out from the Link.
							</div>
							';
						} else {
						    echo '
								<div class="alert alert-dismissible alert-warning">
								  <button type="button" class="close" data-dismiss="alert">&times;</button>
								  <h4 class="alert-heading">Warning!</h4>
								  <p class="mb-0">Best check yo self, you are not looking too good my boy.</p>
								</div>
							';
						}
						
					}
					$conn->close();
				}else{
					echo '
						<div class="alert alert-dismissible alert-warning">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <h4 class="alert-heading">Warning!</h4>
						  <p class="mb-0">Best check yo self, you are not looking too good.</p>
						</div>
					';
				}
			}else{
				if(($caseFlag[1] =="C18FB8E2A42BEBB783B2079357ECF5F6A43886C724D1EFABE20F7F7E2E1D89F9")&&(strpos($ref, 'http://localhost/CISOColabNewPHP/shop.php') !== FALSE)){
					
					if((strtolower(trim($userName[0])) != null)||($_GET['UsrReveal'] != null)){
						echo 'praneeth';
						require_once('../../connect.php');
						$sql = "SELECT userName, timeEnter FROM challengerDetails";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									$dbUserDate = new DateTime(trim($row["timeEnter"]));
										if((strtolower(trim($row["userName"])) == strtolower(trim($userName[0])))&&($userIn->format('Y-m-d H:i:sa')==$dbUserDate->format('Y-m-d H:i:sa'))){
											$found = true;
										}
								}
						} else {
								$found = false;
						}
						if($found == true){
							$user = $userName[0];
							$inDate = $userIn->format('Y-m-d H:i:sa');
							$sqlUpdate = "UPDATE `challengerDetails` SET Hint5='Yes' WHERE userName="."'$user'"."and timeEnter ="."'$inDate'";
							if (mysqli_query($conn, $sqlUpdate)) {
									echo '
								<div class="alert alert-dismissible alert-info">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>Hints On!</strong> This is <a href="https://www.owasp.org/index.php/Top_10-2017_A3-Sensitive_Data_Exposure" target="_blank" class="alert-link">vulnerable to Broken Access Control</a>, Check it out from the Link.
								</div>
								';
							} else {
									echo '
									<div class="alert alert-dismissible alert-warning">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<h4 class="alert-heading">Warning!</h4>
										<p class="mb-0">Best check yo self, you are not looking too good my boy.</p>
									</div>
								';
							}
							
						}
						$conn->close();
					}else{
						echo '
							<div class="alert alert-dismissible alert-warning">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<h4 class="alert-heading">Warning!</h4>
								<p class="mb-0">Best check yo self, you are not looking too good.</p>
							</div>
						';
					}
				}
			}
		}
	}
	
?>