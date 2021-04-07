setInterval("yxw()",1000);
		function yxw(){
			
			
			var mytime=new Date();
			var nian=mytime.getFullYear();
			var yue=mytime.getMonth()+1;
			var ri=mytime.getDate();
			var xs=mytime.getHours();
			var fz=mytime.getMinutes();
			var m=mytime.getSeconds();
			
			var myd=mytime.getDay();
			var myxa="";
			switch (myd){
				case 0:
					myxa="天";
					break;
				case 1:
					myxa="一";
					break;
				case 2:
					myxa="二";
					break;
				case 3:
					myxa="三";
					break;
				case 4:
					myxa="四";
					break;
				case 5:
					myxa="五";
					break;
				case 6:
					myxa="六";
					break;	
			}
			
			
			
			
			
			var xhw=document.getElementById("iqw");
			xhw.innerHTML=""+nian+"年"+yue+"月"+ri+"日 "+xs+":"+fz+":"+m+"秒 今天是周"+myxa+" 祝您";
		}
		