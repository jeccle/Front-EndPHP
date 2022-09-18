<link rel="stylesheet" href="../css/styles.css" />
<div class="backdrop-box">
        <div class="container d-flex-inline nav-box" id='#top-nav-box'>
            <ul class="navbar navbar-collapse navbar-nav">
                
                <li class="nav-item">
                    <a href="../index.php" class="nav-link">
                        <p class="nav-text">Home</p>
                    </a>
                </li>

                <li class="nav-item nav-title-text"><p>CITE Questions and Answers</p></li>
                
                <li class="nav-item">
                    <a href="html/contacts.html" class="nav-link">
                        <p class="nav-text">Contacts</p>
                    </a>
                </li>

            </ul>
        </div>
        <div class="container-fluid title-box">
            
        <h1 id="nav-title"><?php 
            @$message = 'Question ' . $id + 1;
            if ($pageTitle == 'Question Index') {
                $message = 'Question Index';
            }
            print $message;
            ?>
        </h1>    
    </div>
</div>
        

