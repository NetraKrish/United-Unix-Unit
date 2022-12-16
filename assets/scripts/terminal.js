var input = document.getElementById("input");

//array containing all existing directories - for purpose of simplicity we allow only one directory/file inside each directory
output=["user","unix"];
//array containing directories until current directory
ccur=["user","unix"];
//keep track of c before it updates
c=["user","unix"];
//array holding all the variables created
vararr=[];
// read indicator to indicate read command was called
var read = false;
//for checking echo
var echo=false;
//for checking usage of piping
var pipe=false;
window.onload=terminalCheck();

function terminalCheck(){
	input.addEventListener('keypress', terminalWrite);
	document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";
}

var out = document.getElementById("output");
function terminalWrite() {  
	
	                                                                                 
	if (event.key === "Enter" && input.value != "") {
		event.preventDefault();
		
		var line = document.createElement('div');
		
		var stuff = document.createElement('br');
		
	
		stuff.classList.add('line'); 
		line.append(input.value);
		//line.classList.add('superline');
		
		if(read==true){
			vararr.push(input.value);
			line.innerHTML="[root@unix: ~"+c.join("/")+"]"+input.value;
			out.appendChild(line);
			document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";
			read=false;
			input.value='';
		}
		else if(event.key === "Enter" && input.value.includes("|"))
	{
piping();
pipe=true;
document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";
		console.log(pipe);

input.value='';
	}
		else{
	
	if (event.key === "Enter" && input.value.includes("mkdir ")){
		event.preventDefault();
		ar = input.value.split(" ");
		
	
		output.push(ar[1]);
		
		line.innerHTML="[root@unix: ~"+c.join("/")+"]"+input.value;
		
		out.appendChild(line);
		document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";
		console.log(c);
		console.log(output);
		input.value = '';
	}
	if (event.key === "Enter" && input.value==("cd ..")){
		event.preventDefault();
	
		
	
		ccur.pop();
		line.innerHTML="[root@unix: ~"+ c.join("/")+"]" +input.value;
		document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";
		c.pop();
		out.appendChild(line);
		
		input.value = '';
	}
	else if (event.key === "Enter" && input.value.includes("cd ")){
		event.preventDefault();
		ar = input.value.split(" ");
		if(output.includes(ar[1]))
		{ccur.push(ar[1]);	
		line.innerHTML="[root@unix: ~" + c.join("/")+ "]"+input.value;
		c.push(ar[1]);
		document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";
		input.value = '';
		}
	
	else
	line.innerHTML="[root@unix: ~" + c.join("/")+ "]"+input.value+"<br>[root@unix: ~" + c.join("/")+ "] no such directory exists";
		out.appendChild(line);
		document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";
		input.value = '';
		
	}
	if(event.key === "Enter" && input.value.includes("read "))
	{ar = input.value.split(" ");
	read = true;
	//for the purpose of simplicity we let them create only one variable
	
		
		console.log(read);
line.innerHTML=line.innerHTML="[root@unix: ~" + c.join("/")+ "]"+input.value;

document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";

out.appendChild(line);
input.value='';
	}

	if(event.key === "Enter" && input.value.includes("echo "))
	{echo =true;
		if(input.value.includes("$"))
	
	{line.innerHTML="[root@unix: ~"+c.join("/")+"]" + input.value+"<br>[root@unix: ~"+c.join("/")+"]" + vararr[0];}

else
{line.innerHTML="[root@unix: ~"+c.join("/")+"]" + input.value+"<br>[root@unix: ~"+c.join("/")+"]" + input.value.split(" ")[1];
}
	
document.getElementsByClassName("prompt")[0].innerHTML="[root@unix: ~"+ ccur.join("/")+"]";
	out.appendChild(line);
input.value='';
	}
}
	
	}
	else
	{
		line.innerHTML="[root@unix: ~]\xa0\xa0" + document.getElementById("input").value;
		out.appendChild(line);
		input.value = '';
	}
	
}


function terminal1Val()
{
if (c.includes("beginner"))

	document.getElementById("terminalresult").innerHTML="Pass!";

else
document.getElementById("terminalresult").innerHTML="Fail:(";
}
function terminal2Val()
{
if (vararr[0]=="intermediate"&& echo)

	document.getElementById("terminalresult2").innerHTML="Pass!";

else
document.getElementById("terminalresult2").innerHTML="Fail:(";
}
function terminal3Val()
{
if (c.includes("advanced")&& pipe==true)

	document.getElementById("terminalresult3").innerHTML="Pass!";

else
document.getElementById("terminalresult3").innerHTML="Fail:(";
}
function piping()
{// for loop for each command in pipe
	
	s= input.value;
	ar= input.value.split("|");
	
	for(i=0;i<ar.length;i++)
	{ ar[i]=ar[i].trim();
		var line = document.createElement('div');
		
	var stuff = document.createElement('br');
	

	stuff.classList.add('line'); 
	line.innerHTML="[root@unix: ~"+c.join("/")+"]"+s;

		if (ar[i].includes("mkdir ")){
			event.preventDefault();
			ar2 = ar[i].split(" ");
			
		
			output.push(ar2[1]);
			
		
			console.log(c);
			console.log(output);
			input.value = '';
		}
		if (ar[i]==("cd ..")){
			event.preventDefault();
		
			
		
			ccur.pop();
		
			c.pop();
		
			
			input.value = '';
		}
		else if (ar[i].includes("cd ")){
			event.preventDefault();
			ar2 = ar[i].split(" ");
			if(output.includes(ar2[1]))
			{ccur.push(ar2[1]);	
		
			c.push(ar2[1]);
			input.value = '';
			}
		
		else
		line.innerHTML="[root@unix: ~" + c.join("/")+ "]"+ar[i]+"<br>[root@unix: ~" + c.join("/")+ "] no such directory exists";
			out.appendChild(line);
			input.value = '';
			
		}
		if(ar[i].includes("read "))
		{ar = input.value.split(" ");
		read = true;
		//for the purpose of simplicity we let them create only one variable
		
			
			console.log(read);
	
	
	out.appendChild(line);
	input.value='';
		}
	
		if(ar[i].includes("echo "))
		{echo =true;
			if(ar[i].includes("$"))
		
		{line.innerHTML="[root@unix: ~"+c.join("/")+"]" + ar[i]+"<br>[root@unix: ~"+c.join("/")+"]" + vararr[0];}
	
	else
	{line.innerHTML="[root@unix: ~"+c.join("/")+"]" + ar[i]+"<br>[root@unix: ~"+c.join("/")+"]" + ar[i].split(" ")[1];
	}
		
		
		out.appendChild(line);
	input.value='';
}

	}
	

}