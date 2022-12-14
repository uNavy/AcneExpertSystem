<link rel="stylesheet" type="text/css" href="/css/styles.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
    <div class="bg-tosca">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand es-title" href="/">EXPERT SYSTEM</a>
        <button class="navbar-toggler" href="/team" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/team">Team</a>
                </li>
           
            </ul>
           
        </div>
        </nav>

    <div class="bg-tosca">
        <div class="cust-container vh-center">
            <h1>{{ $jawaban->nama_penyakit }}</h1>
            
            
            <p class="solution-text">{!! $jawaban->solusi !!}</p><br>
            <div class="jwb_card">
                <img src="image/G_Penyakit/G_{{$jawaban->id_penyakit}}.jpg" height="100px" width="100px"/>
                <div class="container">
                </div>
            </div>
    </div>
</body>

</html>
