document.getElementById("despl").onclick = function(){open()};

function open() {
    document.getElementById("DROPPL").style.width = "250px";
  }

document.getElementById("close").onclick = function(){closepl()};
function closepl() {
    document.getElementById("DROPPL").style.width = "0";
  }