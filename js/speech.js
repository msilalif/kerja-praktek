// function input kalimat Speech to Text dengan didasarkan pada id di dalam input type text
function record1() {
				var recognition = new webkitSpeechRecognition();
				recognition.continous = true;
				recognition.interimResults = true;
				recognition.lang = "id-ID";
		
				recognition.onresult = function(event) {
					console.log(event);
					document.getElementById('nama').value = event.results[0][0].transcript;
				}
			
				recognition.start();
            }
            
// function input kalimat Speech to Text dengan didasarkan pada id di dalam input type password 
function record2() {
				var recognition = new webkitSpeechRecognition();
				recognition.continous = true;
				recognition.interimResults = true;
				recognition.lang = "id-ID";
		
				recognition.onresult = function(event) {
					console.log(event);
					document.getElementById('word').value = event.results[0][0].transcript;
				}
			
				recognition.start();
            }
            
// function input kalimat Speech to Text dengan didasarkan pada id di dalam input type dalam tabel-user.php saat search data
function record3() {
				var recognition = new webkitSpeechRecognition();
				recognition.continous = true;
				recognition.interimResults = true;
				recognition.lang = "id-ID";
		
				recognition.onresult = function(event) {
					console.log(event);
					document.getElementById('keyword').value = event.results[0][0].transcript;
					$("#btn-search").click();
				}
			
				recognition.start();
            }
            
function enter() {
    var input = document.getElementById("keyword");
    input.addEventListener("keyup"),
    function (event) {
        if (event.keycode === 13) {
           event.preventDefault();
           document.getElementById("btn-search").click();
        }
    }
};