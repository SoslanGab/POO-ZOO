

var audiotypes={
        "mp3": "audio/mpeg",
        "mp4": "audio/mp4",
        "ogg": "audio/ogg",
        "wav": "audio/wav"
    };

    function ss_soundbits(sound){
        var audio_element = document.createElement('audio')
        if (audio_element.canPlayType){
            for (var i=0; i<arguments.length; i++){
                var source_element = document.createElement('source')
                source_element.setAttribute('src', arguments[i])
                if (arguments[i].match(/\.(\w+)$/i))
                    source_element.setAttribute('type', audiotypes[RegExp.$1])
                audio_element.appendChild(source_element)
            }
            audio_element.load()
            audio_element.playclip=function(){
                audio_element.pause()
                audio_element.currentTime=0
                audio_element.play()
            }
            return audio_element
        }
    }




    var bush_dog_1 = ss_soundbits("assets/music/Bush-Dog-Food.mp3");
    var bush_dog_2 = ss_soundbits("assets/music/Bush-Dog-Sound.mp3");
    var bush_dog_3 = ss_soundbits("assets/music/Bush-Dog-Home.mp3");
    var bush_dog_4 = ss_soundbits("assets/music/Bush-Dog-2nd-Home.mp3");

    var tiger1  = ss_soundbits("assets/music/Tiger-Food.mp3");
    var tiger2  = ss_soundbits("assets/music/Tiger-Sound.mp3");
    var tiger3  = ss_soundbits("assets/music/Tiger-Home.mp3");
    var tiger4  = ss_soundbits("assets/music/Tiger-2nd-Home.mp3");

    var otter1  = ss_soundbits("assets/music/Otter-Food.mp3");
    var otter2  = ss_soundbits("assets/music/Otter-Sound.mp3");
    var otter3  = ss_soundbits("assets/music/Otter-Home.mp3");
    var otter4  = ss_soundbits("assets/music/Otter-2nd-Home.mp3");

    var panda1  = ss_soundbits("assets/music/Panda-Food.mp3");
    var panda2  = ss_soundbits("assets/music/Panda-Sound.mp3");
    var panda3  = ss_soundbits("assets/music/Panda-Home-2.mp3");
    var panda4  = ss_soundbits("assets/music/Panda-2nd-Home.mp3");

    var monkey1  = ss_soundbits("assets/music/Orangutan-Food.mp3");
    var monkey2  = ss_soundbits("assets/music/Orangutan-Sound.mp3");
    var monkey3  = ss_soundbits("assets/music/Orangutan-Home.mp3");
    var monkey4  = ss_soundbits("assets/music/Orangutan-2nd-Home.mp3");