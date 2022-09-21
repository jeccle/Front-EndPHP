<link rel="stylesheet" href="../css/styles.css" />
<div class="backdrop-box nav-box">
        <div class="container d-flex-inline" id='#top-nav-box'>
            <ul class="navbar flex-sm navbar-collapse navbar-nav">
                <li class="nav-item navbar-item">
                    <a href="../index.php" class="nav-link">
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-item nav-title-text"><p>CITE Questions and Answers</p></li>
                
                <li class="nav-item navbar-item">
                    <a href="html/contacts.html" class="nav-link">
                        <p>Contacts</p>
                    </a>
                </li>

            </ul>
        </div>
        <div class="container-fluid nav-title-box d-flex justify-content-center">
            <div class='nav-title light-text'>
        <h1><?php 
            @$message = 'Question ' . $id + 1;
            if ($pageTitle == 'Question Index') {
                $message = 'CITE Questions Index';
            }
            print $message;
            ?>
        </h1>    
        </div>
    </div>
</div>
        

