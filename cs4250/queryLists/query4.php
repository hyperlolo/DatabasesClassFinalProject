<!DOCTYPE html>
<html>
<!-- includes the info.php file -->
<?php 
include "../../info.php";
include "../phpFuncs.php"
?>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="../rTables/rTables.css"/>

<head>
    <title>Members with less than 100k in non-joint accounts|Query List|Banksy</title>
</head>

<body>

<div id="canWithdraw">
    <svg class="Rectangle_19">
        <rect fill="rgba(40,61,165,1)" id="Rectangle_19" rx="0" ry="0" x="0" y="0" width="1920" height="170">
        </rect>
    </svg>

	<div id="Banksy">
		<span>Banksy</span>
    </div>
    
    <div id="Group_235">

		<div id="Home">
			<span><a target="_self" href="/~kgill/index.php" style="color: inherit; "target="_blank">Home</a></span>
        </div>
        <svg class="Path_16" viewBox="0 0 21.81 21.834">
			<path fill="rgba(255,255,255,1)" id="Path_16" d="M 21.56321716308594 19.65091323852539 C 19.08683776855469 17.21183586120605 15.08751392364502 16.58227920532227 11.83419513702393 18.12069129943848 L 9.223171234130859 19.35433197021484 C 6.647628307342529 20.57250785827637 3.490745306015015 20.08578300476074 1.54839813709259 18.17254829406738 C 1.190403819084167 17.81982803344727 0.6142567992210388 17.82410621643066 0.2615376114845276 18.18209838867188 C -0.09118148684501648 18.54009246826172 -0.0869050994515419 19.11623954772949 0.2710892856121063 19.46895980834961 C 1.841342568397522 21.01556015014648 4.024777412414551 21.83434867858887 6.241874217987061 21.83434867858887 C 7.520092964172363 21.83434867858887 8.810138702392578 21.56142044067383 10.00011157989502 20.99918556213379 L 12.61113548278809 19.76554489135742 C 15.18667888641357 18.54737091064453 18.3426513671875 19.03318405151367 20.28590965270996 20.94733047485352 C 20.64747619628906 21.27663421630859 21.20458602905273 21.26156425476074 21.54782104492188 20.91319465637207 C 21.89105606079102 20.5648250579834 21.89785385131836 20.00755310058594 21.56321716308594 19.65091514587402 Z M 6.169092655181885 18.19528961181641 L 6.33103084564209 18.19528961181641 C 6.968016624450684 18.18230056762695 7.597278118133545 18.05311965942383 8.187860488891602 17.81409645080566 L 8.187859535217285 13.64646816253662 C 8.187859535217285 12.13912010192871 9.409806251525879 10.91717433929443 10.91715431213379 10.91717433929443 C 12.42450046539307 10.91717433929443 13.64644718170166 12.13912105560303 13.64644718170166 13.64646911621094 L 13.64644718170166 15.65886688232422 C 14.28783130645752 15.54059791564941 14.93922233581543 15.46599674224854 15.59334278106689 15.46599674224854 C 17.14176177978516 15.46599674224854 18.65196990966797 15.81261730194092 20.01479911804199 16.43489646911621 L 20.01479911804199 8.227001190185547 C 20.01479911804199 7.731179237365723 19.79190635681152 7.260830879211426 19.40798568725586 6.946961879730225 L 10.91715335845947 0 L 2.426321268081665 6.946961879730225 C 2.042316675186157 7.261044025421143 1.819573760032654 7.73090934753418 1.81950831413269 8.227001190185547 L 1.81950831413269 16.25567245483398 C 2.190692186355591 16.38758850097656 2.535492897033691 16.59137535095215 2.825707912445068 16.87613105773926 C 3.666330099105835 17.70492553710938 4.88268518447876 18.18073272705078 6.169092655181885 18.19528961181641 Z">
			</path>
		</svg>
    </div>



    <footer id="For_any_questions_or_concerns_">
    <span>For any questions or concerns please contact us <a href="mailto:kgill15@csustan.edu?&cc=ggarciadeleon@csustan.edu;cguptail@csustan.edu&subject=Members%20with%20less%20than%20100k%20in%20non-joint%20accounts%20Query%20List" style="color: inherit;"target="_blank">HERE</a></span>
    </footer>

    <div id="Canwithdraw" style="z-index: 9000;">
		<span>Members with less than 100k in non-joint accounts</span>
    </div>
    
    <div id="Query__SELECT___FROM__canWithd">
        <span>SELECT BankAccount.bankAccountNumber, BankAccount.balance, Member.firstName, Member.lastName FROM BankAccount INNER JOIN Member ON BankAccount.memberSSN=Member.memberSSN WHERE (BankAccount.balance < 100000 AND BankAccount.jointAccount = 0);</span><br><br>
        <p>A manager may want to give a promotion to members who don't have as much saved away with the bank.</p>
        <hr>
        <p>Finds out a members first and last name, their account balance, and their bank account number that has a balance less than 100,000 and is not a joint account.</p>
    </div>


    <section id="results" style="top:550px";>
        <main role="main">
        <article>
                
        <?php
 
        //Creates a connection to the db
        $db = new PDO('mysql:host=localhost;dbname=gdeleon;charset=utf8mb4', $username, $password);
        $sql = "SELECT BankAccount.bankAccountNumber, BankAccount.balance, Member.firstName, Member.lastName FROM BankAccount INNER JOIN Member ON BankAccount.memberSSN=Member.memberSSN WHERE (BankAccount.balance < 100000 AND BankAccount.jointAccount = 0);";
        $result = $db->query($sql, PDO::FETCH_ASSOC);
        printTable($result);
        
        // Close connection to SQL Database
        $db = NULL;
        $result = NULL;

        // End of PHP
        ?>
            
            </article>
        </main>
    </section>


</body>

</html>
