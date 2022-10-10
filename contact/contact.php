<?php session_start() ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="/space_club/contact/css/bootstrap.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="/space_club/contact/css/style.css">
   <style>
    @media screen and (min-width : 1100px){
    .btn{
        position: relative;
        margin-top : 3px;
    }
}
       label{
           font-weight : bold;
       }
    body{
        background-color : rgba(57,150,243,0.085) ;
        font-family : monospace ;
        
    }
    form{
        position: relative;
        top : 10px ;
    }
    .formulaire{
        height: 600px;
        background-color: #D1E6FF;
    } 
    .col-2 svg{
    width: 33px ;
    height: 33px;
    } 
    .contactUs{
    background-color: black;
    color: blanchedalmond;
    width: 430px;
    height : 600px ;
    }
    section{
        position: relative;
        left : 13px ;
        
    }
    .mb-1{
        position: relative;
        left : -8px ;
        top : 19px;
    }
    .mb-1 input{
        position: relative;
        width: 285px;
    }
    .mb-4{
        position: relative;
        top : -53.4px ; 
        left : 340.5px ;
    }
    .mb-4 input{
        position: relative;
        width: 285.2px;
    }
    .mb-2{
        position: relative;
        top : -33px ; 
        left : 4px ;
        
    }
    .mb-2 input{
        position: relative;
        width : 286px ; 
        border : 0 ;
        
    }
    .mb-5{
        position: relative;
        top : -33px ; 
        
    }
    .mb-5 input{
        position: relative;
        width : 286px ; 
        border : 0 ;
        
    }
    .mb-6{
        position: relative;
        top : -126px ; 
        left : 4px ;
    }
    .mb-6 input{
        position: relative;
        width : 94% ;
    }
    .mb-7{
        position: relative;
        top : -88px ; 
        left : 4px ;
    }
    .mb-7 textarea{
        position: relative;
        width : 94% ;
    }
    .btn{
        background-color : #3996F3 ;
        width : 130px ;
        border-radius : 20px;
        font-weight : bold ;
        font-size : 16px ;
        font-family : monospace ;
        position: relative;
        left : 260px ;
        top : -59px ;
    }
    .mb-8{
        position: relative;
        left : -12px ;
        top : 18px ; 
        color : black ; 
        font-weight : bold ;
        font-size : 21px ;
        
    }
    .a1{
        position: relative;
        top : 19px ;
        left : 10px ;
    }
    .col-8{
        position: relative;
        top: -20px ;
    }
    .col-8 p{
        position: relative;
        top: 2px ;
        font-size : 24.5px ; 
        font-weight : bold ; 
        
    }
    .col-4 img{
        position: relative;
        width : 80px ; 
        height : 80px ;
        left : 41px ;
        top : 4px ;
        margin-left : 24px ;
    }
    .m-6{
        position: relative;
        left : 8px ;
        top : 17px ;
    }
    .col-10 p{
        position: relative;
        font-size : 17px ; 
        font-weight : 700 ; 
        
    }
    .email{
        position: relative;
        top : -14px ;
    }
    .phone{
        position: relative;
        top : 18px ;
    }
    @media (max-width: 1200px) { 
        .col{
            position: relative;
            left : 100px ;
            top : 68px ;
        }
        .formulaire{
        height: 706px;
        position: relative;
        top : 0px ;
        left : 0px ;
        } 
        .mb-1{
        position: relative;
        top : -62px;
        }
        .mb-4{
        position: relative;
        left : -9px ;
       }
       .mb-2{
        position: relative;
        top : -44px ; 

        
       }
       .mb-5{
        position: relative;
        left : 4px ; 
        top : -40px ;
        
        }
        .mb-6{
        position: relative;
        top : -96px ; 
        }
        .mb-6 input{
        position: relative;
        width : 86% ;
        left : 36px ;
    }
        .mb-6 label{
        position: relative;
        left : 104px; 
        
        }
        .mb-7{
        position: relative;
        top : -84px ; 
        }
        .mb-7 textarea{
        position: relative;
        width : 86% ;
        left : 36px ;
    }
        .mb-7 label{
        position: relative;
        left : 104px; 
        
        }
        .btn{
        background-color : #3996F3 ;
        width : 130px ;
        border-radius : 20px;
        font-weight : bold ;
        font-size : 16px ;
        font-family : monospace ;
        position: relative;
        left : 193px ;
        top : -59px ;
    }
    .mb-8{
        position: relative;
        left : -1px ; 
        }
    .contactUs{
    background-color: black;
    color: blanchedalmond;
    width: 430px;
    height: 706px;
    }

    }
@media (max-width: 1100px) { 
    .contactUs{
    
    width: 400px;
    
    }
    section{
        position: relative;
        left : -28px ;
    }

}
@media (max-width: 1000px) { 
    .col{
            position: relative;
            left : 30px ;
            top : 68px ;
        }
        .formulaire{
        height: 706px;
        position: relative;
        top : 0px ;
        left : 0px ;
        width : 400px ;
        } 
        .row {
        
        width : 400px ;
        } 
        .mb-1{
        position: relative;
        top : -62px;
        }
        .mb-4{
        position: relative;
        left : -9px ;
       }
       .mb-2{
        position: relative;
        top : -44px ; 

        
       }
       .mb-5{
        position: relative;
        left : 4px ; 
        top : -40px ;
        
        }
        .mb-6{
        position: relative;
        top : -96px ; 
        left : -15px ;
        }
        .mb-6 input{
        position: relative;
        width : 86% ;
        left : 36px ;
    }
        .mb-6 label{
        position: relative;
        left :55px; 
        
        }
        .mb-7{
        position: relative;
        top : -84px ; 
        left : -15px ;
        }
        .mb-7 textarea{
        position: relative;
        width : 86% ;
        left : 36px ;
    }
        .mb-7 label{
        position: relative;
        left : 55px; 
        
        }
        .btn{
        background-color : #3996F3 ;
        width : 130px ;
        border-radius : 20px;
        font-weight : bold ;
        font-size : 16px ;
        font-family : monospace ;
        position: relative;
        left : 122px ;
        top : -59px ;
    }
    .mb-8{
        position: relative;
        left : -1px ; 
        }
    .contactUs{
    background-color: black;
    color: blanchedalmond;
    width: 400px;
    height: 706px;
    }

    }
@media (max-width: 600px) { 
    .contactUs{
    background-color: black;
    color: blanchedalmond;
    width: 360px;
    height: 555px;
    }

    .row {
    width : 360px ;
    }
    .formulaire{
        width : 260px ;
    }
   
    .m-6{
        position: relative;
        left : -25px ;
        top : 17px ;
    }
    .btn{
        background-color : #3996F3 ;
        width : 130px ;
        border-radius : 20px;
        font-weight : bold ;
        font-size : 16px ;
        font-family : monospace ;
        position: relative;
        left : 110px ;
        top : -72px ;
    }
   
        
        .col-4 img{
            position: relative;
            left : 10px ;
        }
}
@media screen and (max-width: 1000px) and (min-width: 600px) {
    section {
    position: relative;
    left : 24% ;
    }
    footer{
        width : 100% ;
    }
    nav{
        width : 100% ;
    }
    
    

}
@media screen and (max-width: 450px){
    .col-4 img{
        margin-left : 0px ;
    }
    section {
    position: relative;
    left : -40px ;
    width : 210px ;
    }
    .mb-1{
        position: relative;
        left : -24px ;
        top : -72px ;
        
    }
    .mb-4{
        position: relative;
        left : -24px ;
        top : -72px ;
        
    }
    .mb-2{
        position: relative;
        left : -4px ;
        top : -58px ;
    }
    .mb-5{
        position: relative;
        left : -4px ;
        top : -55px ;
    }
    .mb-6{
        position: relative;
        left : -15px ;
        top : -124px ;
        
    }
    .mb-6 label{
        position: relative;
        left : 35px ;
        
    }
    .mb-7{
        position: relative;
        top : -112px ;
        
    }
    .mb-7 label{
        position: relative;
        left : 36px ;
        
    }
    .btn{
        position: relative;
        top : -90px ;
        left : 112px ;
    }
    
    
    
    
    

}
.mb-6{
    position: relative;
    margin-top : -5px;
} 
.mb-7{
    position: relative;
    margin-top : -8px;
} 
.col-4 img{
    position: relative;
    margin-left : -1px;
}
    </style>
</head>

<body>
    <section class="container m-5">
        <div class="row">
            <div class="col formulaire">
                <p class="mb-8" style="text-align: center;">Do you have any inquiries or questions? 
                    Don't hesitate to contact us</p>
            <form action="/space_club/backend/contact.php" method="POST" >

                <input type="hidden" class="form-control" name="path" value="/space_club/viewsUserSide/contact.php"  id="firstname">
                <div class="row1">
                    <div class="col">
                        <div class="mb-1">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="fName" id="firstname">
                          </div>
                    </div>
                    <div class="col">
                        <div class="mb-4">
                            <label for="secondname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lName" id="secondname">
                          </div>
                    </div>
                  </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" >
                          </div>
                    </div>
                    
                    <div class="col">
                        <div class="mb-5">
                            <label for="phonenumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phoneNumber" id="phonenumber">
                          </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="formGroupExampleInput" class="form-label">Subject</label>
                    <input type="text" class="form-control" name="subject" id="formGroupExampleInput">
                  </div>
                <div class="mb-7">
                    <label for="exampleFormControlTextarea1" class="form-label">How can we help ?</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <?php 
                if (isset($_SESSION['contactMsg'])){
                    echo $_SESSION['contactMsg'];
                }

                ?>
                  </div>
                <input type="submit" value="Send" class="btn btn-info mr-5">
             
            </form>
            </div>
        <div class="contactUs">
            <div class="row a1">
                <div class="col-4">
                    <img src="/space_club/contact/logo.png" >
                </div>
                <div class="col-8 mt-5">
                    <p>Contact Us</p>
                </div>
            </div>
<div class="row m-5 m-6 adresse">
    <div class="col-2">
        <svg viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M52.2793 45.8222L41.9578 35.5028C41.492 35.0369 40.8605 34.7781 40.198 34.7781H38.5107C41.3677 31.124 43.0654 26.529 43.0654 21.5292C43.0654 9.63627 33.4271 0 21.5332 0C9.63933 0 0 9.63627 0 21.5292C0 33.4221 9.63829 43.0584 21.5332 43.0584C26.533 43.0584 31.1301 41.3607 34.7842 38.5037V40.191C34.7842 40.8535 35.043 41.4849 35.5088 41.9507L45.8303 52.2702C46.8033 53.2433 48.3768 53.2433 49.3394 52.2702L52.2689 49.3407C53.242 48.3677 53.242 46.7953 52.2793 45.8222ZM21.5332 36.4334C13.2996 36.4334 6.62704 29.7732 6.62704 21.5292C6.62704 13.2966 13.2882 6.625 21.5332 6.625C29.7668 6.625 36.4394 13.2852 36.4394 21.5292C36.4394 29.7618 29.7782 36.4334 21.5332 36.4334ZM21.5353 11.5938C17.3139 11.5938 13.8917 15.0149 13.8917 19.2363C13.8917 22.6482 18.8874 28.8684 20.8014 31.1261C20.8911 31.2335 21.0034 31.3199 21.1302 31.3792C21.257 31.4385 21.3953 31.4692 21.5353 31.4692C21.6753 31.4692 21.8136 31.4385 21.9404 31.3792C22.0672 31.3199 22.1794 31.2335 22.2692 31.1261C24.1832 28.8684 29.1788 22.6492 29.1788 19.2363C29.1788 15.0149 25.7566 11.5938 21.5353 11.5938ZM21.5353 21.5312C20.1627 21.5312 19.0509 20.4185 19.0509 19.0469C19.0509 17.6743 20.1637 16.5625 21.5353 16.5625C22.9069 16.5625 24.0196 17.6743 24.0196 19.0469C24.0196 20.4185 22.9069 21.5312 21.5353 21.5312Z"
                fill="#3996F3" />
        </svg>

    </div>
    <div class="col-10">
        <p>AIAC, Technopole de l’Aéroport Mohammed V, Nouasser,
            Casablanca, Maroc</p>
    </div>
</div>  
<div class="row m-5 m-6 email">
    <div class="col-2">
        <svg viewBox="0 0 54 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M52.977 14.5292C53.3883 14.174 54 14.5063 54 15.0677V38.5C54 41.5365 51.7324 44 48.9375 44H5.0625C2.26758 44 0 41.5365 0 38.5V15.0792C0 14.5063 0.601172 14.1854 1.02305 14.5406C3.38555 16.5344 6.51797 19.0667 17.2758 27.5573C19.5012 29.3219 23.2559 33.0344 27 33.0115C30.7652 33.0458 34.5938 29.2531 36.7348 27.5573C47.4926 19.0667 50.6145 16.5229 52.977 14.5292ZM27 29.3333C29.4469 29.3792 32.9695 25.9875 34.7414 24.5896C48.7371 13.5552 49.8023 12.5927 53.0297 9.84271C53.6414 9.32708 54 8.525 54 7.67708V5.5C54 2.46354 51.7324 0 48.9375 0H5.0625C2.26758 0 0 2.46354 0 5.5V7.67708C0 8.525 0.358594 9.31562 0.970312 9.84271C4.19766 12.5812 5.26289 13.5552 19.2586 24.5896C21.0305 25.9875 24.5531 29.3792 27 29.3333Z"
                fill="#3996F3" />
        </svg>

    </div>
    <div class="col-10">
        <p>contact@aiac.space</p>
    </div>
</div>
<div class="row m-5 m-6 phone">
    <div class="col-2">
        <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M47.3214 0H5.67857C4.17252 0 2.72815 0.598277 1.66322 1.66322C0.598276 2.72815 0 4.17252 0 5.67857L0 47.3214C0 48.8275 0.598276 50.2718 1.66322 51.3368C2.72815 52.4017 4.17252 53 5.67857 53H47.3214C48.8275 53 50.2718 52.4017 51.3368 51.3368C52.4017 50.2718 53 48.8275 53 47.3214V5.67857C53 4.17252 52.4017 2.72815 51.3368 1.66322C50.2718 0.598277 48.8275 0 47.3214 0ZM45.3824 36.363L43.6079 44.0527C43.5177 44.4437 43.2978 44.7925 42.9839 45.0424C42.67 45.2923 42.2807 45.4284 41.8795 45.4286C22.9509 45.4286 7.57143 30.0834 7.57143 11.1205C7.58551 10.7231 7.72678 10.3407 7.97446 10.0295C8.22214 9.7184 8.56314 9.49497 8.9473 9.39212L16.637 7.61757C16.7682 7.58983 16.9017 7.57438 17.0357 7.57143C17.3789 7.58875 17.7111 7.69761 17.998 7.88671C18.2849 8.07582 18.5159 8.33826 18.6671 8.64681L22.2162 16.9281C22.3032 17.1513 22.3516 17.3878 22.3594 17.6272C22.3305 18.1525 22.0969 18.6456 21.7087 19.0007L17.2262 22.6681C19.9422 28.4247 24.5753 33.0578 30.3319 35.7738L33.9993 31.2913C34.3544 30.9031 34.8475 30.6695 35.3728 30.6406C35.6123 30.6483 35.8487 30.6967 36.0719 30.7838L44.3532 34.3329C44.6619 34.4839 44.9245 34.7149 45.1136 35.0018C45.3027 35.2887 45.4115 35.6211 45.4286 35.9643C45.4262 36.0984 45.4108 36.2319 45.3824 36.363Z"
                fill="#3996F3" />
        </svg>
    </div>
    <div class="col-10">
        <p>212.688.100.300</p>
    </div>
</div>                    
        </div>

    </section>
</body>
</html>