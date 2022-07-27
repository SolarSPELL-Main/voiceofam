const headerTemplate = document.createElement('template');
headerTemplate.innerHTML = `

<header class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-blue" role="navigation">
    
    <a class="navbar-brand img-fluid" href="/voiceofam/index.html"><img class="nav-img" src="/voiceofam/assets/voa-logo.png"></img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a style="color:#FFFFFF"class="nav-link dropdown-toggle active" aria-current="page" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses <span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/voiceofam/let's teach english/teachEng.html">Let's Teach English</a>
                    <a class="dropdown-item" href="/voiceofam/let's learn english level 1/learnEng01.html">Let's Learn English Level 1</a>
                    <a class="dropdown-item" href="/voiceofam/let's learn english level 2/learnEng02.html">Let's Learn English Level 2</a>
                </div>
            </li>           
        </ul>
    </div>
</nav>
</header>
`;
document.body.appendChild(headerTemplate.content);