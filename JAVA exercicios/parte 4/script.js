function tabuada() {

	let num = document.getElementById('txtn')
	let tab = document.getElementById('seltab')

	console.log(num.value)


	
	if (num.value == 0) {
	window.alert('Por favor, digite um número!')
   } else {


   	 let n = Number(num.value)
   	 let c = 1
   	 while (c <= 10) {

   	 	let item = document.createElement('option')
   	 	item.text = `${num.value} x ${c} = ${num.value*c}`
   	 	//console.log(`${num.value} x ${c} = ${num.value*c}`)
   	 	item.value = `tab${c}`
   	 	tab.appendChild(item)
   	 	c++
   	 }
   	 
   }
}