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

       
    <!-- </div> -->
    <div class="bg-image">
        <div class="cust-container vh-center">
            
            <h1 class="text-size">
            {{$pertanyaan -> pertanyaan}}
            </h1>

            <img src="image/G_Gejala/G_{{$pertanyaan->id_gejala}}.jpg" width="180px" onerror="this.onerror=null; this.remove();"/>
            
            <!-- <img src="image/G_Gejala/G_{{$pertanyaan->id_gejala}}.jpg" height="80px" width="80px"/> -->
                                        
            <!-- <p>{{$pertanyaan -> id_gejala}}</p> -->
            <form action="{{route('answer')}}" method="post">
                @csrf
                <input type="hidden" name='ID_Gejala' value ='{{ $pertanyaan -> id_gejala }}' >
                <!-- <input class="button-9" type="button" name='result1' value="true">Ya</input>
                <input class="button-9" type="button" name= 'result2' value="false" >Tidak</input> -->
                <label class="rad-label">
                    <input class="rad-input" type="radio" name="answer" value="true"/>
                    <div class="rad-design"></div>
                    <div class="rad-text">Ya</div>
                </label>

                <label class="rad-label">
                    <input class="rad-input" type="radio" name="answer" value="false"/>
                    <div class="rad-design"></div>
                    <div class="rad-text">Tidak</div>
                </label>

                <br>
                <!-- <a class="previous" href="/prev">&#8249; Back</a> -->
                <div class="btn-grp">
                    <input class="previous" type="button" id="kembali" value="Kembali"></input>
                    <input class="previous" type="submit" value="Lanjutkan"></input>
                
                    <script>
                        document.querySelector('#kembali').addEventListener('click', function(){
                            window.history.back();
                        });
                        
                    </script>
                
                </div>
                <!-- coba -->
            </form>

        </div>
    </div>
</body>