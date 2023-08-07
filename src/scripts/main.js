function getYPostion(element) {
    const rect = element.getBoundingClientRect();
    return rect.top + window.scrollY;
  }

document.addEventListener("DOMContentLoaded", function() {   
    const progressBars = document.getElementsByTagName("progress");
    const firstBreak = document.getElementById("first-break");
    const secondBreak = document.getElementById("second-break");
    
    
    window.addEventListener("scroll", function(){
        let pageElement = this.document.documentElement;
        

        let currentTop = pageElement.scrollTop; // Current position of top
        let pageHeight = pageElement.scrollHeight;
        let screenHeight = (pageHeight - pageElement.clientHeight);

        let percentageProgress = Math.round(currentTop / screenHeight * 100); 
        let firstBreakProgress = Math.round(getYPostion(firstBreak) / screenHeight * 100);
        let secondBreakProgress = Math.round(getYPostion(secondBreak) / screenHeight * 100);
        
        for (let i = 0; i < progressBars.length; i++) {
           progressBars[i].value = percentageProgress 
        }
      
        if ((percentageProgress >= 0 ) && (percentageProgress < firstBreakProgress)) {
            $("#extra1").show();
            $("#extra2").hide();
            $("#extra3").hide();
          }
          else if ((percentageProgress >= firstBreakProgress) && (percentageProgress < secondBreakProgress)) {
          $("#extra1").hide();
          $("#extra2").show();
          $("#extra3").hide();
        } else if ((percentageProgress >= secondBreakProgress) && ( percentageProgress <= 100)){
            $("#extra1").hide();  
            $("#extra2").hide();
            $("#extra3").show();       
        } 
    });

});