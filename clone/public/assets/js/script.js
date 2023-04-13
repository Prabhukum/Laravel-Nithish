const   body = document.querySelector("body"),
        sidebar = document.querySelector(".sidebar"),
        toggle = document.querySelector(".toggle"),
        searchBtn = document.querySelector(".search-box");
      
        toggle.addEventListener("click", () =>{
            sidebar.classList.toggle("close");
        });


        function buttonColor(){
            document.getElementById("button").style.backgroundColor = '#0033A1';
        }
