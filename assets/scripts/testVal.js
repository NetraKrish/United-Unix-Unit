function leveltestVal() {
    b=0;
    i=0;
    a=0;
    if (document.getElementById('que1opt4').checked) {
      document.getElementById('que1opt4').style.border = '3px solid red'
      document.getElementById('que1result').style.color = 'blue'
      document.getElementById('que1result').innerHTML = 'Correct! &#x2714'
      b++;
    }
    else {

        document.getElementById('que1result').style.color = 'red'
        document.getElementById('que1result').innerHTML = 'Incorrect!'
      }

      
    
    if (document.getElementById('que2opt4').checked) {
        document.getElementById('que2opt4').style.border = '3px solid blue'
        document.getElementById('que2result').style.color = 'blue'
        document.getElementById('que2result').innerHTML = 'Correct! &#x2714'
        b++;
      }
      else
      {
      
        document.getElementById('que2result').style.color = 'red'
        document.getElementById('que2result').innerHTML = 'Incorrect!'
      }
   
    
     if (document.getElementById('que3opt4').checked) {
        document.getElementById('que3opt4').style.border = '3px solid blue'
        document.getElementById('que3result').style.color = 'blue'
        document.getElementById('que3result').innerHTML = 'Correct! &#x2714'
        i++;
      }
      else
      {
       
        document.getElementById('que3result').style.color = 'red'
        document.getElementById('que3result').innerHTML = 'Incorrect!'
      }
      if (document.getElementById('que4opt4').checked) {
        document.getElementById('que4opt4').style.border = '3px solid blue'
        document.getElementById('que4result').style.color = 'blue'
        document.getElementById('que4result').innerHTML = 'Correct! &#x2714'
        i++;
      }
      else
      {
       
        document.getElementById('que4result').style.color = 'red'
        document.getElementById('que4result').innerHTML = 'Incorrect!'
      }
      if (document.getElementById('que5opt4').checked) {
        document.getElementById('que5opt4').style.border = '3px solid blue'
        document.getElementById('que5result').style.color = 'blue'
        document.getElementById('que5result').innerHTML = 'Correct! &#x2714'
        a++;
      }
      else
      {
       
        document.getElementById('que5result').style.color = 'red'
        document.getElementById('que5result').innerHTML = 'Incorrect!'
      }
      if (document.getElementById('que6opt4').checked) {
        document.getElementById('que6opt4').style.border = '3px solid blue'
        document.getElementById('que6result').style.color = 'blue'
        document.getElementById('que6result').innerHTML = 'Correct! &#x2714'
        a++;
      }
      else
      {
       
        document.getElementById('que6result').style.color = 'red'
        document.getElementById('que6result').innerHTML = 'Incorrect!'
      }
      n = Math.max(b,i,a);
      m = b+i+a;
      var s;
      if(n==b && m<4)
      {
        s = "You should start as a beginner";
      }
      else if(n==6)
      {
        s = "You should start at advanced";
      }
      else if(n==i)
      {
        s = "You should start at intermediate";
      }
      else if(n==a)
      {
        s = "You should start at advanced";
      }
  
document.getElementById('ltresult').innerHTML=s;
}