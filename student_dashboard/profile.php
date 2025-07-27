<?php
session_start();
if (!isset($_SESSION['s-user'])) {
    header("Location:index.php");
    exit();
}

include("connection.php");

$username = $_SESSION['s-user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google Fonts-------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/profile.css">
    <title>stu4</title>







    <style>
        .chat-container {
            position: absolute;
            top: 140px;
            left: 140px;
            height: 500px;
            bottom: 20px;
            right: 20px;
            width: 300px;
            overflow: hidden;
            background-color: #fff;
            border: 1px solid white;
            border-radius: 7px;
            background: rgba(76, 175, 80, 0.2);
        }
        .chat-container p {
            text-align: center;
        }
        .chat-messages {
            height: 467px;
            padding: 20px;
            overflow-y: auto;
            max-height: 356px;
        }
        .chat-messages::-webkit-scrollbar {
            width: 8px;
        }
        .chat-messages::-webkit-scrollbar-track {
            background: white;
        }
        .chat-messages::-webkit-scrollbar-thumb {
            background: #dbe9ff;
        }
        .chat-messages::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        .messageBox {
            width: 248px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            padding: 0 15px;
            border-radius: 10px;
            border: 1px solid white;
            margin-left: 10px;
            color: black;
        }
        .messageBox:focus-within {
            border: 1px solid rgb(110, 110, 110);
        }
        #user-input {
            width: 200px;
            height: 100%;
            background-color: transparent;
            outline: none;
            border: none;
            padding-left: 10px;
            color: black;
        }
        #user-input:focus ~ #send-button svg path,
        #user-input:valid ~ #send-button svg path {
            fill: #3c3c3c;
            stroke: white;
        }
        #send-button {
            width: fit-content;
            height: 100%;
            background-color: transparent;
            outline: none;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        #send-button svg {
            height: 18px;
            transition: all 0.3s;
        }
        #send-button svg path {
            transition: all 0.3s;
        }
        #send-button:hover svg path {
            stroke: white;
        }
        @keyframes typing { 
            0% { 
                width: 0% 
            } 
            100% { 
                width: 100% 
            } 
        }
        @keyframes blink {
            0%, 
            100% { 
                border-right: 2px solid transparent; 
            }
            50% { 
                border-right: 2px solid #222; 
            }
        }




        










    </style>










</head>
<body>
            <header>
            <div class="nav">
            <div class="menuToggle" onClick="toggleMenu();"></div>
                <ul class="navigation" onClick="toggleMenu();">
                    <li><a href="dashboard.php" onClick="toggleMenu();"><img class="img1" src="images/dashboard.png" alt="dashboard"></a></li>
                    <li><a href="Fact-student.php" onClick="toggleMenu();"><img class="img2" src="images/rise.png" alt="rise"></a></li>
                    <li><a href="profile.php" onClick="toggleMenu();"><img class="img3" src="images/avatar.png" alt="profile"></a></li>
                    <li><a href="/major_project2/logout/logout.php" onClick="toggleMenu();"><img class="img4" src="images/logout.png" alt="logout"></a></li>
                
                </ul>
            </div>
            </header>


    <p class="txt1">Your Profile</p>
    <div class="profile">

        <?php
            $sel="SELECT img_source FROM student_login WHERE uname='$username'";
            $rs=$conn->query($sel);
            while($row=$rs->fetch_assoc()){
        ?>

        <div style="">
            <img style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;
            object-position: center right; opacity: 100%; border: 2px solid white; left: 400px ; position: absolute;" class="logo" src="../Register/images/<?php echo $row['img_source']; ?>" alt="logo">

            <a href="#"><button class="button1">Edit</button></a>
            
            <?php } ?>
        </div>

 

        <P class="name"><?php echo $username ?></P>
        <p class="txt2">Student of<br>
        <b>Swami Vivekananda Institute of Modern Science </b><br>
        Kolkata, West Bengal</p>
    </div>




    <div class="chat-container">
        <b><p>CHATBOT</p></b>
        <div class="chat-messages" id="chat-messages">
            <p style="margin-top: 90px; font-weight: bold; font-size: 20px; opacity: 50%;" id="placeholder-message">Search some technical questions here!</p>
        </div>
        <div class="messageBox">
            <div class="fileUploadWrapper">
                <label for="file"></label>
            </div>
            <input required="" placeholder="Message..." type="text" id="user-input" />
            <button id="send-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 664 663">
                <path fill="none" d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="33.67" stroke="#6c6c6c" d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"></path>
                </svg>
            </button>
        </div>
    </div>








    <footer class="footer">
        <p class="f1">© 2024 Easy Attend.com All rights reserved</p>
        
        <img class="play" src="images/play-store.png" alt="playstore">
        <img class="app" src="images/appstore.png" alt="appstore">
        <p class="coming">Coming soon...</p>
    
        <button class="button2">Send your feedback</button>
    </footer>


    <script>
        

// Toggle menu creation
window.addEventListener('scroll', function(){
			const header = document.querySelector('header');
			header.classList.toggle("sticky", window.scrollY > 0);
		});
		
		function toggleMenu(){
			const menuToggle = document.querySelector('.menuToggle');
			const navigation = document.querySelector('.navigation');
			menuToggle.classList.toggle('active');
			navigation.classList.toggle('active');
		}









const chatMessages = document.getElementById('chat-messages');
const userInput = document.getElementById('user-input');
const sendButton = document.getElementById('send-button');

const technicalQA = [
    
    {
        question: 'What is HTML?',
        answer: 'Hypertext Markup Language'
    },
    {
        question: 'What is CSS?',
        answer: 'Cascading Style Sheets'
    },
    // Add more QA pairs as needed
    {
        question: 'What is JavaScript?',
        answer: 'A high-level programming language'
    },
    {
        question: 'What is SQL?',
        answer: 'Structured Query Language'
    },
    {
        question: 'What is CSS?',
        answer: 'Cascading Style Sheets'
    },
    {
        question: 'What is JavaScript?',
        answer: 'A high-level programming language'
    },
    {
        question: 'What is SQL?',
        answer: 'Structured Query Language'
    },
    {
        question: 'What is Python?',
        answer: 'A high-level programming language'
    },
    {
        question: 'What is Java?',
        answer: 'An object-oriented programming language'
    },
    {
        question: 'What is C++?',
        answer: 'A general-purpose programming language'
    },
    {
        question: 'What is PHP?',
        answer: 'Hypertext Preprocessor'
    },
    {
        question: 'What is Ruby?',
        answer: 'An object-oriented programming language'
    },
    {
        question: 'What is Swift?',
        answer: 'A general-purpose programming language'
    },
    {
        question: 'What is Git?',
        answer: 'A version control system'
    },
    {
        question: 'What is GitHub?',
        answer: 'A web-based platform for version control'
    },
    {
        question: 'What is Bootstrap?',
        answer: 'A front-end framework for web development'
    },
    {
        question: 'What is React?',
        answer: 'A JavaScript library for building user interfaces'
    },
    {
        question: 'What is Angular?',
        answer: 'A JavaScript framework for building web applications'
    },
    {
        question: 'What is Vue.js?',
        answer: 'A JavaScript framework for building web applications'
    },
    {
        question: 'What is Node.js?',
        answer: 'A JavaScript runtime for building server-side applications'
    },
    {
        question: 'What is MongoDB?',
        answer: 'A NoSQL database'
    },
    {
        question: 'What is MySQL?',
        answer: 'A relational database management system'
    },
    {
        question: 'What is PostgreSQL?',
        answer: 'A relational database management system'
    },
    {
        question: 'What is Firebase?',
        answer: 'A cloud-based platform for building web and mobile applications'
    },
    {
        question: 'What is AWS?',
        answer: 'Amazon Web Services'
    },
    {
        question: 'What is Azure?',
        answer: 'Microsoft Azure'
    },
    {
        question: 'What is Google Cloud?',
        answer: 'Google Cloud Platform'
    },
    {
        question: 'What is Docker?',
        answer: 'A containerization platform'
    },
    {
        question: 'What is Kubernetes?',
        answer: 'A container orchestration system'
    },
    {
        question: 'What is DevOps?',
        answer: 'Development and Operations'
    },
    {
        question: 'What is Agile?',
        answer: 'An iterative and incremental approach to project management'
    },
    {
        question: 'What is Scrum?',
        answer: 'A framework for project management'
    },
    {
        question: 'What is Kanban?',
        answer: 'A visual system for managing work'
    },
    {
        question: 'What is Linux?',
        answer: 'An open-source operating system'
    },
    {
        question: 'What is Windows?',
        answer: 'A proprietary operating system'
    },
    {
        question: 'What is macOS?',
        answer: 'A proprietary operating system'
    },
    {
        question: 'What is Chrome OS?',
        answer: 'A proprietary operating system'
    },
    {
        question: 'What is Android?',
        answer: 'A mobile operating system'
    },
    {
        question: 'What is iOS?',
        answer: 'A mobile operating system'
    },
    {
        question: 'What is machine learning?',
        answer: 'A subfield of artificial intelligence'
    },
    {
        question: 'What is deep learning?',
        answer: 'A subfield of machine learning'
    },
    {
        question: 'What is natural language processing?',
        answer: 'A subfield of artificial intelligence'
    },
    {
        question: 'What is computer vision?',
        answer: 'A subfield of artificial intelligence'
    },
    {
        question: 'What is robotics?',
        answer: 'A field of engineering and computer science'
    },
    {
        question: 'What is cybersecurity?',
        answer: 'The practice of protecting computer systems and networks'
    },
    {
        question: 'What is ethical hacking?',
        answer: 'The practice of testing computer systems and networks'
    },

    // Add 96 more QA pairs here
];


sendButton.addEventListener('click', () => {
    const userMessage = userInput.value.trim();
    if (userMessage !== '') {
        
        const answer = getAnswer(userMessage);
        setTimeout(() => {
        appendMessage('', answer);
        }, 1000); // Delay the chatbot's response for 1 second
        userInput.value = '';
    }
});

function appendMessage(author, message) {

    const placeholderMessage = document.getElementById('placeholder-message');placeholderMessage.style.display = 'none';

    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message');
    const messageText = document.createElement('span');
    messageText.classList.add('message-text');
    messageDiv.appendChild(messageText);
    const messageAuthor = document.createElement('span');
    messageAuthor.classList.add('message-author');
    messageAuthor.textContent = author;
    messageDiv.appendChild(messageAuthor);
    chatMessages.appendChild(messageDiv);

    // Start typing animation
    typeMessage(messageText, message);
}

function typeMessage(element, message) {
    // Reset text
    element.textContent = '';

    // Set up typing animation
    let i = 0;
    const typingInterval = setInterval(() => {
        if (i < message.length) {
            element.textContent += message.charAt(i);
            i++;
        } else {
            clearInterval(typingInterval); // Stop animation
        }
    }, 50); // Adjust typing speed as needed
}

function getAnswer(question) {
    for (const qa of technicalQA) {
        if (qa.question.toLowerCase() === question.toLowerCase()) {
            return qa.answer;
        }
    }
    return "Sorry, I don't understand that question.";
}

    </script>
    
</body>
</html>
