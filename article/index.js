

function openl(event){
		    event=event||window.event;
			console.log("打开:"+event.target.previousSibling);
	    event.target.previousSibling.className="closel";
		event.target.innerText='∧收起';
		event.target.onclick=closel;
		
		
		
		}
function closel(event){
		    event=event||window.event;
			console.log("关闭:"+event.target.previousSibling);
	    event.target.previousSibling.className="content";
		event.target.innerHTML='∨展开';
		event.target.onclick=openl;
		}
