<?php 

if($_POST['signo1'] == "aries"){ $signo1="Áries";}
if($_POST['signo1'] == "touro"){ $signo1="Touro";}
if($_POST['signo1'] == "gemeos"){ $signo1="Gêmeos";}
if($_POST['signo1'] == "cancer"){ $signo1="Câncer";}
if($_POST['signo1'] == "leao"){ $signo1="Leão";}
if($_POST['signo1'] == "virgem"){ $signo1="Virgem";}
if($_POST['signo1'] == "libra"){ $signo1="Libra";}
if($_POST['signo1'] == "escorpiao"){ $signo1="Escorpião";}
if($_POST['signo1'] == "sagitario"){ $signo1="Sagitário";}
if($_POST['signo1'] == "capricornio"){ $signo1="Capricórnio";}
if($_POST['signo1'] == "aquario"){ $signo1="Aquário";}
if($_POST['signo1'] == "peixes"){ $signo1="Peixes";}

if($_POST['signo2'] == "aries2"){ $signo2="Áries";}
if($_POST['signo2'] == "touro2"){ $signo2="Touro";}
if($_POST['signo2'] == "gemeos2"){ $signo2="Gêmeos";}
if($_POST['signo2'] == "cancer2"){ $signo2="Câncer";}
if($_POST['signo2'] == "leao2"){ $signo2="Leão";}
if($_POST['signo2'] == "virgem2"){ $signo2="Virgem";}
if($_POST['signo2'] == "libra2"){ $signo2="Libra";}
if($_POST['signo2'] == "escorpiao2"){ $signo2="Escorpião";}
if($_POST['signo2'] == "sagitario2"){ $signo2="Sagitário";}
if($_POST['signo2'] == "capricornio2"){ $signo2="Capricórnio";}
if($_POST['signo2'] == "aquario2"){ $signo2="Aquário";}
if($_POST['signo2'] == "peixes2"){ $signo2="Peixes";}
   

	//ÁRIES
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "aries2"){
          echo "<div id='aries-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Aries.png' alt='Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa parceria é explosiva, mas não significa que seja desequilibrada. A pedida dos astros, neste caso, é a pizza Baiana. A cor vermelha da pimenta dedo-de-moça serve para nos alertar da alta picância, por isso, tanto para o relacionamento, como para a pizza, equilíbrio será a chave mestra do casal.</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "touro2"){
          echo "<div id='aries-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Touro.png' alt='Áries e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Filé Mignon <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Morde e assopra. Calma, esse casal tem chances interessantes de vingar, mas o gênio apimentado dos arianos e a teimosia dos taurinos podem dar uma causadinha nesse enlace. A pedida dos astros, neste caso, é a pizza meia Baiana e meia Filé Mignon. Uma picância na medida e muito recheio para Touro não ter o que falar.<br>
				O nosso alerta romance para vocês é: Se der bom, não dá ruim, e vice-versa.</p>
			</div>	
		</div>" ;
        } 
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='aries-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Gemeos.png' alt='Áries e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Olivia <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Alguém disse: paciência? Será preciso muito jogo de cintura entre esses dois signos, afinal, intensidade é característica nata de arianos e geminianos. A pedida dos astros, neste caso, é a pizza metade Baiana, metade Olivia. Brasilidade e sofisticação tornam esses sabores inconfundíveis, igual a vocês.<br>
				A nossa dica zodiacal para o relacionamento é estabelecer espaço.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='aries-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Cancer.png' alt='Áries e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Portuguesa <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>O que falar dessa combinação vulcão e brisa leve? Essa paixão pode sim se equilibrar, já que Câncer tem o dom de relevar, até certo ponto, né queridos. E quem não se rende ao charme aventureiro dos arianos? <br>
				A pedida dos astros neste caso é a pizza metade Baiana, metade Portuguesa. Sair do óbvio, mas também mesclar o tradicional, é essencial.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "leao2"){
          echo "<div id='aries-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Leao.png' alt='Áries e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e <br>Grana Padano <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Puro êxtase. Apesar desses dois signos gostarem de dominar, cada um tem seu estilo genial para tal feito - ou quase. Essa relação tem tudo para fluir, tipo a música, mesmo: “Deixa acontecer naturalmente...”. A pedida dos astros neste caso é a pizza metade Baiana, metade Grana Padano. Até porque sabores exóticos funcionam muito bem para esses dois bon-vivants.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='aries-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Virgem.png' alt='Áries e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Alho- Poró <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A espontaneidade do ariano vai dar aquela balançada na vida organizada do virginiano. Mas nada impede um date bacana entre esses dois signos, não acham!? A pedida dos astros neste caso é a pizza metade Baiana, metade Alho-Poró. Tanto os ingredientes da pizza como os do mapa astral podem ser compatíveis para uma relação interessante.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "libra2"){
          echo "<div id='aries-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Libra.png' alt='Áries e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Ômega <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Impetuosidade seria a palavra para definir essa junção zodiacal. Da mesma forma que os opostos se atraem e os dispostos se distraem, quem sabe numa dessas esses dois signos possam levar a relação adiante. A pedida dos astros neste caso é a pizza metade Baiana e metade Ômega. Variedade de aromas e sabores não há de faltar para esses dois signos. <br>
				<strong>Mas vale refletir: Opostos, se atraem.</strong>Iguais, <strong>se distraem</strong>. E os atentos <strong>se</strong> veem distraídos... Espero que tenham aproveitado a dica!
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='aries-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Escorpiao.png' alt='Áries e Escorpião '>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Sensazione <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esse encontro é atração fatal. Afinal, os opostos se atraem. Mas quem disse que signos de fogo e água não podem formar um belo par? <br>
				Quando há um objetivo de vida em comum, esse encontro pode dar samba. Isso porque, quando o sentimento é profundo, o afeto e a lealdade são tudo para os nativos de Áries e Escorpião. <br>
				Pra esses dois, a combinação perfeita é a pizza metade Baiana e metade Sensazione. Ingredientes picantes dessa combinação vão agradar o entusiasmado ariano, como pimenta dedo-de-moça e o mix de pimentões e pepperoni, já a intensidade da gorgonzola, da calabresa e a suavidade do cream cheese certamente vão agradar o intenso – porém exigente – escorpiano.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='aries-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Sagitario.png' alt='Áries e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Ui, ALERTA crush magia. Romance, viagens, novidades, talvez não nessa ordem, necessariamente. O que importa é que a energia de vocês é contagiante. A pedida dos astros neste caso é a pizza metade Baiana metade Emiliana. Ingredientes como geleia de pimenta e gorgonzola, por exemplo, harmonizarão jantares pra lá de entusiasmados com esse casal.<br>
				Não precisa dizer mais nada, só vai!
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='aries-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Capricornio.png' alt='Áries e Capricórnio '>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Speciale <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Vocês são muito diferentes um do outro. Áries é impulsivo e ingênuo, já Capricórnio é ponderado e sábio. Mas o jogo duro de Capricórnio com o jeito galanteador de Áries pode acender uma grande paixão. Transparência e flexibilidade serão peças-chave para que essa relação dê certo. Se vocês souberem ceder, vocês têm tudo para ser a metade da pizza um do outro.<br>
				Os astros, neste caso, indicam que a pizza ideal é a metade Speciale e metade Baiana.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='aries-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Aquario.png' alt='Áries e Aquário '>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Margherita <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Se tem uma frase mais apropriada para esses dois signos seria: “deixe-o livre, se voltar é seu.” Ou algo parecido com isso. O ariano tende a ser expansivo nas emoções, já o aquariano totalmente mental, mas isso não impede que saia algo bom dessa combinação. A pedida dos astros neste caso é a pizza metade Baiana metade Margherita. <br>
				Se porventura esse romance não sair, uma coisa é certa: pode rolar uma amizade excelente.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aries" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='aries-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aries/Aries-Peixes.png' alt='Áries e Peixes '>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Baiana e Jéssica <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa é uma combinação delicada, Áries com seu jeito extrovertido e impulsivo, às vezes não consegue compreender o signo de Peixes, que é sonhador e sensível, mas com uma pitada de compreensão de ambos, vocês podem se tornar um casalzão pra vida inteira.<br>
				Atenção! Vocês podem se apaixonar logo na primeira fatia, digo, à primeira vista. A pedida dos astros nessa relação é a pizza metade Baiana e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        } 
	
	//TOURO
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "aries2"){
          echo "<div id='touro-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Aries.png' alt='Touro e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Baiana <br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Morde e assopra. Calma, esse casal tem chances interessantes de vingar, mas o gênio apimentado dos arianos e a teimosia dos taurinos podem dar uma causadinha nesse enlace. A pedida dos astros, neste caso, é a pizza meia Filé Mignon e meia Baiana. Uma picância na medida e muito recheio para Touro não ter o que falar.<br>
				O nosso alerta romance para vocês é: Se der bom, não dá ruim, e vice-versa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "touro2"){
          echo "<div id='touro-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Touro.png' alt='Touro e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Clássicos e confiáveis, os casais de Touro têm muito para dar certo. A pedida dos astros, neste caso, é a pizza Filé Mignon. Farta em recheio, carne de primeira e catupiry generoso, deixará o casal in love. Mas uma dica para essa harmonia não ir por água abaixo é: na hora de pedir uma pizza, peça DUAS. Nada de brigas desnecessárias com esses dois taurinos bons de garfo.
				</p>
			</div>	
		</div>"  ;
        } 
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='touro-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Gemeos.png' alt='Touro e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa interessante combinação vai dar o que falar. Gêmeos adora uma festinha, falar dez assuntos em três minutos, tem mil amigos e contatinhos, adora uma aventura – de todo o tipo! Já Touro é focado, gosta de estabilidade emocional e financeira, prefere sabadão com Netflix e comida (muita comida!) e deseja formar uma família. <br>
				Mas na paixão, ninguém segura essa química. Afinal, a vida é uma caixinha de surpresas e os dois podem se dar muito bem se souberem ceder e agradar um ao outro. <br>
				Pra começar bem, aqui vão as dicas: geminiano, chame o taurino pra comer pizza e tirar a barriga da miséria (só assim pra ele sair do sofá); taurino, escolha um sabor ousado e cheio de ingredientes diferentes pra agradar o geminiano. <br>
				A pedida ideal pra esses dois é uma pizza metade Olivia e metade Filé Mignon.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='touro-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Cancer.png' alt='Touro e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Casal comercial de margarina. Touro é um signo super amorzinho e deseja formalizar sua relação para aproveitar a vida num lar doce lar. Câncer ama a sua família e a meta mais importante de sua vida é formar seu próprio clã. A pedida dos astros neste caso é a pizza metade Filé Mignon e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "leao2"){
          echo "<div id='touro-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Leao.png' alt='Touro e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Sabe aquele casal meta de vida? Pois então, certamente será o casal feito dos signos de Leão e Touro.<br>
				Os dois possuem apreço pelo conforto e estabilidade financeira. O lado amoroso também é ponto comum entre o casal, que traz acolhimento sentimental aos parceiros.<br>
				A pedida dos astros neste caso é a pizza metade Filé Mignon e metade Grana Padano.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='touro-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Virgem.png' alt='Touro e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Um casal pé no chão, que tem tudo pra dar certo! <br>
				Ambos gostam de estabilidade emocional, sabem usar e planejar bem o que fazer com o dinheiro, preferem passeios mais calmos do que badalados.  Touro pode ser mais intenso e demonstrar seu afeto logo de cara, e terá que ter paciência com Virgem, que demonstra sua admiração sendo útil e prestativo, além de demorar um pouquinho pra demonstrar sua afeição. Aprendendo que o amor verdadeiro vem com o dia a dia, essa combinação vai durar a vida inteira e promete ter boas doses de carinho, paixão, companheirismo e intensidade.  <br>
				A pedida dos astros neste caso é a pizza metade Filé Mignon e metade Alho-Poró. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "libra2"){
          echo "<div id='touro-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Libra.png' alt='Touro e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Eu vim acabar com essa sua vidinha de balada. Oi? Pera.<br>
				Não é bem assim, os taurinos também são baladeiros, mas até certo ponto, já os librianjos acham que quem tem limite é município. Essa relação tem grandes chances de vingar, se tiverem um pouquinho de dedicação para harmonizar pequenos contratempos.<br>
				A pedida dos astros neste caso é a pizza metade Filé Mignon e metade Ômega.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='touro-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Escorpiao.png' alt='Touro e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>ALERTA casalzão! Esses dois signos são um ímã um para o outro, já que o magnetismo é em altíssimo nível nessa relação. A única coisa que pode dar ruim entre vocês é o ciúme excessivo. Então, caso queiram algo duradouro, façam a egípcia para ficar tudo bem.<br>
				A pedida dos astros, neste caso, é a pizza metade Filé Mignon e metade Sensazione.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='touro-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Sagitario.png' alt='Touro e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa pode ser uma parceria criativa. Enquanto Sagitário é festeiro e vive no mundo da Lua, Touro é mais calmo e está com os pés bem ficados na Terra, naquilo que ele pode ver e tocar. Aí é que as coisas vão ficando interessantes: a convivência, a paixão e a força de vontade vão fazer com que vocês equilibrem seus interesses. Touro pode escutar os sonhos do Sagita, arriscar mais e sair da mesmice com suas aventuras, e o sagitariano pode aprender com o taurino a ter foco quando necessário e entender que um pouco de pé no chão é saudável. <br>
				E pra festejar essa parceria que tem grandes chances de dar certo, a pedida dos astros é a pizza metade Filé Mignon e metade Emiliana.  
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='touro-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Capricornio.png' alt='Touro e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Avistamos um date perfeito. O que caprica e touro querem da vida: solidez financeira, solidez no trabalho, solidez no relacionamento, transformando a vida a dois em uma muralha da China ou quase isso. A pedida dos astros neste caso é a pizza metade Speciale e metade Filé Mignon. Suculência e consistência não hão de faltar.<br>
				Os dois olham muito para o futuro e buscam coisas muito parecidas, então, avante, queridos. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='touro-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Aquario-touro.png' alt='Touro e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Uma combinação pra lá de excêntrica. Para andarem juntos, esses dois vão ter que ter flexibilidade: Aquário vai ter que aterrissar em terra firme de vez em quando, e Touro vai ter que topar voar longe pelos ares com Aquário. Assim, as coisas vão fluir melhor entre vocês... <br>
				Resumindo: é preciso inovar e sair da rotina, mas com um toque de moderação.  <br>
				Nesse caso, a pedida ideal dos astros é a pizza metade Margherita e Filé Mignon.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "touro" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='touro-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Touro/Touro-Peixes.png' alt='Touro e Peixes '>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Filé Mignon e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esse flerte é todo sensorial. Touro é realista e perceptivo, enquanto Peixes é sonhador e sensitivo. Sentir além do que se vê é um tanto poético, e por isso esses dois signos dão liga para ir adiante.<br>
				Pode ter começado com uma amizade, já que Touro é realista e sensorial, enquanto Peixes é idealista e sensitivo. A pedida dos astros neste caso é a pizza metade Filé Mignon e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        } 
	
	//Gêmeos
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "aries2"){
          echo "<div id='gemeos-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Aries.png' alt='Gêmeos e Aries '>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Alguém disse: paciência? Será preciso muito jogo de cintura entre esses dois signos, afinal, intensidade é característica nata de arianos e geminianos. A pedida dos astros, neste caso, é a pizza metade Baiana, metade Olivia. Brasilidade e sofisticação tornam esses sabores inconfundíveis, igual a vocês.<br>
				A nossa dica zodiacal para o relacionamento é estabelecer espaço.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "touro2"){
          echo "<div id='gemeos-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Touro.png' alt='Gêmeos e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa interessante combinação vai dar o que falar. Gêmeos adora uma festinha, falar dez assuntos em três minutos, tem mil amigos e contatinhos, adora uma aventura – de todo o tipo! Já Touro é focado, gosta de estabilidade emocional e financeira, prefere sabadão com Netflix e comida (muita comida!) e deseja formar uma família. <br>
				Mas na paixão, ninguém segura essa química. Afinal, a vida é uma caixinha de surpresas e os dois podem se dar muito bem se souberem ceder e agradar um ao outro. <br>
				Pra começar bem, aqui vão as dicas: geminiano, chame o taurino pra comer pizza e tirar a barriga da miséria (só assim pra ele sair do sofá); taurino, escolha um sabor ousado e cheio de ingredientes diferentes pra agradar o geminiano. <br>
				A pedida ideal pra esses dois é uma pizza metade Olivia e metade Filé Mignon.
				</p>
			</div>	
		</div>"  ;
        } 
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='gemeos-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Gemeos.png' alt='Gêmeos e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Passarão longe da rotina, já que a palavra de ordem para essa dupla é aventura.<br>
				A pedida dos astros, neste caso, é a pizza Olivia. Com ingredientes requintados, o paladar sairá do óbvio, o que para o signo de Gêmeos é essencial até na hora da escolha da pizza.<br> 
				Mas é claro que não podemos estereotipar esse casal por causa desta característica, já que eles fogem a qualquer padrão. Eles comeriam o menu inteiro, tudo dependerá da personalidade do dia.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='gemeos-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Cancer.png' alt='Gêmeos e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>No mínimo inusitada essa combinação. Os dois signos tem muitas coisas em comum, adoram estar antenados, são comunicativos, possuem mentes ágeis. Às vezes podem surgir atritos bobos. Mas basta o geminiano se ligar mais e demonstrar mais cuidado e apego, que o canceriano vai se sentir confiante e seguro, e aí, não tem pra ninguém.<br>
				A pedida dos astros neste caso é a pizza metade Olivia e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "leao2"){
          echo "<div id='gemeos-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Leao.png' alt='Gêmeos e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Se juntos já causam, imagine juntos?<br>
				Devem ter em mente esses dois que, se quiserem ficar juntos, têm que entender que o centro das atenções não tem um dono só e todos têm a sua vez de brilhar.  <br>
				Mas por outro lado, o nível intelectual dos dois é interessante e pode render altos diálogos. A pedida dos astros, neste caso, é a pizza metade Olivia e metade Grana Padano.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='gemeos-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Virgem.png' alt='Gêmeos e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Complicados e perfeitinhos. Para evitar conflitos, esse casal precisará de uma boa dose de jogo de cintura. Virgem é capaz de oferecer estabilidade emocional a Gêmeos, e o geminiano dá um certo frescor à vida do virginiano. A pedida dos astros neste caso é a pizza metade Olivia e metade Alho-Poró.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "libra2"){
          echo "<div id='gemeos-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Libra.png' alt='Gêmeos e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Ômega<br>(".$signo1." e ".$signo2.") </h2>
				<p style='text-align: left;'>Gostar das mesmas coisas, terem muitos assuntos e ser a companhia certa para se divertir, faz esse relacionamento voar! Mas... Como tudo que é bom tem suas idas e vindas, temos um desafio: ambos podem ter medo de se entregar.<br>
				Com um pouco de paciência, o amor há de reinar! <br>
				A pedida dos astros neste caso é a pizza metade Ômega e metade Olivia.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='gemeos-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Escorpiao.png' alt='Gêmeos e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Intensidade e alguma instabilidade, é o que melhor descreveria esse casal. Apesar das diferenças, podem formar uma combinação um tanto quanto interessante e exótica. Gêmeos não costuma cair de cabeça nas relações, mas se o escorpiano com toda sua sensualidade laçar o livre geminiano, a paixão irá vingar. A leveza de Gêmeos pode compensar o excesso de intensidade de Escorpião. Já o olhar mais profundo de Escorpião pode ajudar Gêmeos a ver a vida com menos superficialidade.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='gemeos-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Sagitario.png' alt='Gêmeos e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Liberdade pra dentro da cabeça. Estes dois signos precisam ser livres para explorar suas vidas, ao mesmo tempo em que mantêm um relacionamento. Se conseguirem fazer isso, então as chances de que este relacionamento funcione podem aumentar. A pedida dos astros neste caso é a pizza metade Olivia e metade Emiliana.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='gemeos-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Capricornio.png' alt='Gêmeos e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A relação entre esses dois signos tem tudo para dar certo, contanto que haja paciência e confiança entre as duas partes. Com o comprometimento e o jeito sonhador de Capricórnio, se tornará a segunda metade do signo de Gêmeos, que tem um perfil divertido e leve de aproveitar a vida. Se os dois souberem amenizar as diferenças e aprender com elas, poderão dividir pizzas com o mozão sempre em sintonia.<br>
				Essa combinação pede a pizza metade Speciale e metade Olivia.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='gemeos-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Aquario.png' alt='Gêmeos e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>E daí que Gêmeos pensa mil coisas ao mesmo tempo? Os aquarianos são adeptos do Deboísmo e da liberdade, e os geminianos não sentem nenhum desconforto com a liberdade de Aquário porque estão sempre ocupados com suas causas e objetivos de vida. Esse casal é pura sintonia. A pedida dos astros, neste caso, é a pizza metade Olivia e metade Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "gemeos" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='gemeos-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Gemeos/Gemeos-Peixes.png' alt='Gêmeos e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Olivia e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Entre a emoção e a razão fica o quê? Fica o questionamento se pode dar certo ou não esse lance de vocês dois. No entanto, esse romance pode dar certo. É que Peixes é flexível e todo amorzinho e, se Gêmeos entrar nesse clima, vai garantir uma sintonia bacana. A pedida dos astros neste caso é a pizza metade Olivia e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        } 
	
	//Câncer
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "aries2"){
          echo "<div id='cancer-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Aries.png' alt='Câncer e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa  e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>O que falar dessa combinação vulcão e brisa leve? Essa paixão pode sim se equilibrar, já que Câncer tem o dom de relevar, até certo ponto, né queridos. E quem não se rende ao charme aventureiro dos arianos? <br>
				A pedida dos astros neste caso é a pizza metade Portuguesa e metade Baiana. Sair do óbvio, mas também mesclar o tradicional, é essencial.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "touro2"){
          echo "<div id='cancer-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Touro.png' alt='Câncer e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Casal comercial de margarina. Touro é um signo super amorzinho e deseja formalizar sua relação para aproveitar a vida num lar doce lar. Câncer ama a sua família e a meta mais importante de sua vida é formar seu próprio clã. A pedida dos astros neste caso é a pizza metade Emiliana e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='cancer-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Gemeos.png' alt='Câncer e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>No mínimo inusitada essa combinação. Os dois signos tem muitas coisas em comum, adoram estar antenados, são comunicativos, possuem mentes ágeis. Às vezes podem surgir atritos bobos. Mas basta o geminiano se ligar mais e demonstrar mais cuidado e apego, que o canceriano vai se sentir confiante e seguro, e aí, não tem pra ninguém.<br>
				A pedida dos astros neste caso é a pizza metade Olivia e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='cancer-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Cancer.png' alt='Câncer e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Sensibilidade à flor da pele que fala, né? Mas o casal de Câncer é muito mais que isso. Fiéis aos que amam, os cancerianos protegem com unhas e dentes a relação. A pedida dos astros, neste caso, é a pizza Portuguesa. Os regentes no signo de Câncer descartam a gourmetização e prezam pela simplicidade tanto na pizza como na relação.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "leao2"){
          echo "<div id='cancer-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Leao.png' alt='Câncer e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Ligação kármica. Esses dois signos prezam a fidelidade e a lealdade, mas cada um a seu próprio gosto. A objetividade e a determinação leonina fará o coração do canceriano bater mais forte. A pedida dos astros, neste caso, é a pizza metade Portuguesa e metade Grana Padano.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='cancer-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Virgem.png' alt='Câncer e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Casal equilíbrio. Os dois poderão ser meios de grande desenvolvimento um para o outro, já que o virginiano conseguirá arrancar o canceriano do oceano de sentimentos em que ele vive. Mas devemos alertar que os virginianos são guiados pela razão, e Câncer um poço de emoção. A pedida dos astros neste caso é a pizza metade Alho-Poró e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "libra2"){
          echo "<div id='cancer-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Libra.png' alt='Câncer e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Senta aqui, vamos conversar. <br>
				Os librianos fazem de tudo um evento, já os cancerianos fazem da sessão Netflix sua festa particular. Existe carinho, romantismo e mimos. A sensibilidade de Câncer agrada Libra, e o jeito cuidadoso de Libra faz Câncer se sentir feliz e seguro. Os dois detestam briga e violência. Só não esqueçam que um toque de liberdade a essa relação é necessário. Para manter toda essa harmonia, aposte em encontros regados a muito bom humor e jantares refinados. <br>
				A pedida dos astros neste caso é a pizza metade Ômega e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='cancer-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Escorpiao.png' alt='Câncer e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Só vai! Vocês podem e devem se jogar nessa relação e, se tudo caminhar como achamos, será uma relação daquelas de causar inveja nos outros signos. Só uma dica: Escorpião, cuidado com a grosseria vez ou outra para não ferir esse coraçãozinho sentimentalista de Câncer.
				A pedida dos astros neste caso é a pizza metade Portuguesa e metade Sensazione. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='cancer-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Sagitario.png' alt='Câncer e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esse casal de opostos que se atraem promete ser repleta de riso e algumas lágrimas. Uma combinação deliciosa e com um toque de dramaticidade. Sagitário adora festejar e ter uma família não está em seus planos. Se o canceriano deseja se relacionar com este signo, terá que embarcar nas aventuras de Sagitário... mas pode muito bem usar de seu poder de persuasão emocional para conquistá-lo e fazê-lo mudar de ideia. Mas pra fazer acontecer de verdade, comunicação e honestidade é fundamental. Câncer, não faça tempestade em copo de água. E você, Sagitário, dizer tudo o que pensa pode magoar o canceriano. <br>   
				A pedida dos astros neste caso é a pizza metade Portuguesa, metade Emiliana, pra equilibrar sabores tradicionais e inusitados, como gorgonzola, presunto e geleia de pimenta.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='cancer-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Capricornio.png' alt='Câncer e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>É como costumamos dizer: ou dá bom ou dá ruim, já que se trata de signos que se complementam. A sintonia desse casal é afinadíssima, por pensarem de formas bem parecidas, aliviando possíveis atritos. A pedida dos astros neste caso é a pizza metade Speciale e metade Portuguesa. Ambos os sabores fazem dessa escolha assertiva. <br>
				Aqui vale frisar que o importante é saber que nem todo copo que transborda é sinal de abundância afetiva.  
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='cancer-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Aquario.png' alt='Câncer e Aquário '>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Excelentes amigos, camaradas, confidentes. Mas na conquista, Câncer precisa ir com calma, que esse vagalhão de emoções pode acabar espantando Aquário! <br>
				Há quem acredite que essa relação não vai vingar...será? Não se enganem: a verdade é que, por mais que o aquariano ame a liberdade, uma hora ele quer voltar para um lugar que possa chamar de lar. E ninguém melhor para proporcionar isso a ele do que o nativo de Câncer!  <br>
				A pedida ideal do astros para esse casal é a pizza Portuguesa e Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "cancer" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='cancer-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Cancer/Cancer-Peixes.png' alt='Câncer e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Portuguesa e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Alerta crush magia. Essa dupla talvez seja a mais “melação” do zodíaco, isso porque ambos são altamente apaixonantes e apaixonáveis. Só não se esqueça, alguém tem que tomar partido aí para começar a desenrolar essa história de amor. A pedida dos astros neste caso é a pizza metade Jéssica metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        }
	
	//Leão
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "aries2"){
          echo "<div id='leao-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Aries.png' alt='Leão e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Puro êxtase. Apesar desses dois signos gostarem de dominar, cada um tem seu estilo genial para tal feito - ou quase. Essa relação tem tudo para fluir, tipo a música, mesmo: “Deixa acontecer naturalmente...”. A pedida dos astros neste caso é a pizza metade Grana Padano e metade Baiana. Até porque sabores exóticos funcionam muito bem para esses dois bon-vivants.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "touro2"){
          echo "<div id='leao-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Touro.png' alt='Leão e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Sabe aquele casal meta de vida? Pois então, certamente será o casal feito dos signos de Leão e Touro.<br>
				Os dois possuem apreço pelo conforto e estabilidade financeira. O lado amoroso também é ponto comum entre o casal, que traz acolhimento sentimental aos parceiros.<br>
				A pedida dos astros neste caso é a pizza metade Grana Padano e metade Filé Mignon.
				</p>
			</div>	
		</div>"  ;
        } 
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='leao-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Gemeos.png' alt='Leão e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Se juntos já causam, imagine juntos?<br>
				Devem ter em mente esses dois que, se quiserem ficar juntos, têm que entender que o centro das atenções não tem um dono só e todos têm a sua vez de brilhar.  <br>
				Mas por outro lado, o nível intelectual dos dois é interessante e pode render altos diálogos. A pedida dos astros, neste caso, é a pizza metade Olivia e metade Grana Padano.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='leao-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Cancer.png' alt='Leão e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Ligação kármica. Esses dois signos prezam a fidelidade e a lealdade, mas cada um a seu próprio gosto. A objetividade e a determinação leonina fará o coração do canceriano bater mais forte. A pedida dos astros, neste caso, é a pizza metade Grana Padano e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "leao2"){
          echo "<div id='leao-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Leao.png' alt='Leão e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Jogo de Titãs, um casalzão desses. O casal de Leoninos, para equilibrar nessa relação, terá que entender que, em um único palco, pode haver dois holofotes e, assim, nenhum se ofuscará.<br>
				A pedida dos astros, neste caso, é a pizza Grana Padano... porque sofisticação pode e DEVE existir em todos os âmbitos da vida a dois. E por que não nesta pizza, finalizada com azeite trufado e ingredientes requintados? <br>
				Perfeição vai ser ver dois leoninos juntos. Xô, inveja dos outros signos!
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='leao-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Virgem.png' alt='Leão e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A força e o poder dessa combinação pode resultar em algo inusitado e que vai funcionar bem longo prazo. Mas é preciso que os dois aprendam que, no amor, não tem competição, e sim cooperação. Nada como a convivência para aparar as arestas e as diferenças.  O leonino, se quiser se relacionar com alguém de Virgem, deverá saber que vez ou outra cederá o centro das atenções para o genial e racional virginiano, e aceitar que ninguém tem razão o tempo todo. Já você, virginiano, vai precisar esquecer um pouco a razão e se render ao ardente Leão, à sua beleza e carisma. Ninguém segura essa dupla!<br>
				A pedida dos astros pra esses dois é a pizza metade Grana Padano e metade Alho-Poró.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "libra2"){
          echo "<div id='leao-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Libra.png' alt='Leão e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Se tratando do palco da vida, haja holofotes para esses dois signos. Mas sim, eles conseguirão dividir o palco e darão um show de romance e lealdade. Embora Leão seja impetuoso e Libra  mais espiritual, conseguirão se desenvolver mutuamente. <br> 
				A pedida dos astros neste caso é a pizza metade Grana Padano e metade Ômega. Haja pizzas tão supremas para esse poder todo.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='leao-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Escorpiao.png' alt='Leão e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Possibilidades mil. Pode dar MUITO certo ou MUITO errado. Tudo MUITO grandioso nesse lance de vocês dois. Ambos possuem personalidade imponente, são inteligentes e sagazes. Mas o fato é que o misterioso Escorpião, junto com o impetuoso Leão, é química na certa. <br>
				A pedida dos astros neste caso é a pizza metade Speciale e metade Sensazione.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='leao-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Sagitario.png' alt='Leão e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Alerta match! Alerta Crushzão! Leão adora a ideia de brilhar como a ideia de ser admirado, e Sagitário gosta muito de oferecer atenção, mas devemos deixar claro, o sagitariano não será o puxa-saco da vez.  Tudo tem limite. A pedida dos astros neste caso é a pizza metade Grana Padano e metade Emiliana.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='leao-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Capricornio.png' alt='Leão e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Dois signos duros na queda mas que podem ser um casal gracinha. O desapego de Capricórnio pode confundir Leão, que precisa se sentir endeusado praticamente o tempo todo. A pedida dos astros neste caso é a pizza metade Speciale e metade Grana Padano. Cada um com seu perfil gastronômico altamente saboroso. <br>
				Em todo o caso, ambos os signos têm o poder de criar algo muito sólido, basta aplicar doses diárias de paciência.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='leao-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Aquario.png' alt='Leão e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Leão: desça um pouquinho do salto e embarque na causa do aquariano. Aquário: elogie o leonino, dê presentes...quem não gosta de ser agradado? Principalmente este signo.  Assim, vocês aprenderão muito um com o outro. Aqui, nessa combinação astrológica o que não vai faltar é paixão. A pedida dos astros neste caso é a pizza metade Grana Padano e metade Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "leao" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='leao-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Leao/Leao-Peixes.png' alt='Leão e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Grana Padano e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Um quer ser contemplado, já o outro busca o templo. <br>
				Os interesses da pessoa de Peixes não se limitam ao próprio ego quanto os da pessoa de Leão. Peixes não tem nenhum desejo de competir com ninguém, o que dá estabilidade no relacionamento entre esses dois signos. A pedida dos astros neste caso é a pizza metade Grana Padano e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        }
	
	//Virgem
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "aries2"){
          echo "<div id='virgem-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Aries.png' alt='Virgem e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A espontaneidade do ariano vai dar aquela balançada na vida organizada do virginiano. Mas nada impede um date bacana entre esses dois signos, não acham!? A pedida dos astros neste caso é a pizza metade Baiana, metade Alho-Poró. Tanto os ingredientes da pizza como os do mapa astral podem ser compatíveis para uma relação interessante.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "touro2"){
          echo "<div id='virgem-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Touro.png' alt='Virgem e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Um casal pé no chão, que tem tudo pra dar certo! <br>
				Ambos gostam de estabilidade emocional, sabem usar e planejar bem o que fazer com o dinheiro, preferem passeios mais calmos do que badalados.  Touro pode ser mais intenso e demonstrar seu afeto logo de cara, e terá que ter paciência com Virgem, que demonstra sua admiração sendo útil e prestativo, além de demorar um pouquinho pra demonstrar sua afeição. Aprendendo que o amor verdadeiro vem com o dia a dia, essa combinação vai durar a vida inteira e promete ter boas doses de carinho, paixão, companheirismo e intensidade.  <br>
				A pedida dos astros neste caso é a pizza metade Filé Mignon e metade Alho-Poró. 
				</p>
			</div>	
		</div>"  ;
        } 
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='virgem-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Gemeos.png' alt='Virgem e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Complicados e perfeitinhos. Para evitar conflitos, esse casal precisará de uma boa dose de jogo de cintura. Virgem é capaz de oferecer estabilidade emocional a Gêmeos, e o geminiano dá um certo frescor à vida do virginiano. A pedida dos astros neste caso é a pizza metade Olivia e metade Alho-Poró.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='virgem-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Cancer.png' alt='Virgem e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Casal equilíbrio. Os dois poderão ser meios de grande desenvolvimento um para o outro, já que o virginiano conseguirá arrancar o canceriano do oceano de sentimentos em que ele vive. Mas devemos alertar que os virginianos são guiados pela razão, e Câncer um poço de emoção. A pedida dos astros neste caso é a pizza metade Alho-Poró e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "leao2"){
          echo "<div id='virgem-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Leao.png' alt='Virgem e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A força e o poder dessa combinação pode resultar em algo inusitado e que vai funcionar bem longo prazo. Mas é preciso que os dois aprendam que, no amor, não tem competição, e sim cooperação. Nada como a convivência para aparar as arestas e as diferenças.  O leonino, se quiser se relacionar com alguém de Virgem, deverá saber que vez ou outra cederá o centro das atenções para o genial e racional virginiano, e aceitar que ninguém tem razão o tempo todo. Já você, virginiano, vai precisar esquecer um pouco a razão e se render ao ardente Leão, à sua beleza e carisma. Ninguém segura essa dupla!<br>
				A pedida dos astros pra esses dois é a pizza metade Grana Padano e metade Alho-Poró.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='virgem-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Virgem.png' alt='Virgem e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>É, queridos virginianjos, para que essa relação dê frutos, terão que ceder um bocado, porém, os dois nativos do mesmo signo estão à procura das mesmas coisas no amor e por isso estão dispostos a oferecer o seu melhor um para o outro. A pedida dos astros neste caso é a pizza Alho-Poró, equilibrada em aparência, textura, consistência, cor, cheiro e sabor. É a pizza ideal para os virginianos. <br>
				Com o casal de Virgem, por ser feito de pessoas bastante críticas, a única coisa a se fazer é rezar para que o ascendente seja maleável, neste caso.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "libra2"){
          echo "<div id='virgem-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Libra.png' alt='Virgem e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Na catraca seletiva de Virgem certamente os librianos terão passe livre. Na Astrologia, Virgem é o inferninho astral de Libra, mas isso não é tão importante para um signo que sabe lidar com diferentes perfis. A pedida dos astros neste caso é a pizza metade Alho-Poró e metade Ômega. <br>
				Ah, mais uma coisa: não é não, viu, Libra? se Virgem falar que não vai sair, é ponto final.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='virgem-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Escorpiao.png' alt='Virgem e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Se há uma coisa que aguça o Escorpião é o mistério proposto pelo outro signo, e Virgem faz isso como ninguém, mas não é de propósito, acredite. Esse lance de casualidade entre virginiano e escorpiano é o princípio de algo muito maior, podendo virar amor no meio do caminho. A pedida dos astros neste caso é a pizza metade Alho-Poró e metade Sensazione.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='virgem-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Sagitario.png' alt='Virgem e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A palavra de ordem é cautela. Há grandes possibilidades de que essa relação possa dar frutos, se ambos aprenderem a aceitar os pontos de vista diferentes um do outro, aprendendo que isso solucionar problemas diários e enriquecer a relação. A pedida dos astros neste caso é a pizza metade Emiliana metade Alho-Poró.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='virgem-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Capricornio.png' alt='Virgem e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>ALERTA de casal magia. Astrologicamente, vocês são um casalzão de causar inveja no zodíaco todo. Mas precisam dosar a seriedade e a dureza que essa relação tende a ter com o passar do tempo. A pedida dos astros, neste caso, é a pizza metade Alho-Poró e metade Speciale. O cream cheese é o ponto alto dos ingredientes. <br>
				Uma dica simples, mas necessária: não levem a vida tão a sério. Planilha de gerenciamento não se aplica para o coração, galera.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='virgem-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Aquario.png' alt='Virgem e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esses dois tem espaço garantido no céu. Como não se emocionar com o casal mais engajado em causas sociais do zodíaco?<br>
				Enquanto Virgem usa seu poder analítico para melhorar o que já está existe, Aquário tem ideias grandes e mirabolantes – só não sabe direito como vai levá-las até o fim. Então, aí é que, juntos, vai dar em algo consistente. Mas atenção: Virgem, resista à tentação de controlar a liberdade de Aquário; Aquário, dê uma colher de chá e faça o Virgo se sentir seguro. Assim, vocês vão longe. Mas não se esqueçam que ninguém muda o mundo com fome, por isso, a pedida dos astros é a pizza meia Alho-Poró e meia Margherita. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "virgem" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='virgem-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Virgem/Virgem-Peixes.png' alt='Virgem e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Alho-Poró e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Diferenças que unem são no mínimo interessantes e trazem bons aprendizados. Peixes adora  viagens mentais – ficar no mundo da lua. Virgem é intelectual e está sempre com os pés bem plantados no chão. Vocês tem boas chances de mesclar essas características e formar um casalzão. A pedida dos astros neste caso é a pizza metade Alho-Poró e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        }
	
	//Libra
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "aries2"){
          echo "<div id='libra-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Aries.png' alt='Libra e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Impetuosidade seria a palavra para definir essa junção zodiacal. Da mesma forma que os opostos se atraem e os dispostos se distraem, quem sabe numa dessas esses dois signos possam levar a relação adiante. A pedida dos astros neste caso é a pizza metade Ômega e metade Baiana. Variedade de aromas e sabores não há de faltar para esses dois signos. <br>
				<strong>Mas vale refletir: Opostos, se atraem.</strong> Iguais, <strong>se distraem.</strong> E os atentos <strong>se</strong> veem distraídos... Espero que tenham aproveitado a dica!
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "touro2"){
          echo "<div id='libra-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Touro.png' alt='Libra e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Eu vim acabar com essa sua vidinha de balada. Oi? Pera. <br>
				Não é bem assim, os taurinos também são baladeiros, mas até certo ponto, já os librianjos acham que quem tem limite é município. Essa relação tem grandes chances de vingar, se tiverem um pouquinho de dedicação para harmonizar pequenos contratempos.<br>
				A pedida dos astros neste caso é a pizza metade Filé Mignon e metade Ômega.
				</p>
			</div>	
		</div>"  ;
        } 
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='libra-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Gemeos.png' alt='Libra e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Gostar das mesmas coisas, terem muitos assuntos e ser a companhia certa para se divertir, faz esse relacionamento voar! Mas... Como tudo que é bom tem suas idas e vindas, temos um desafio: ambos podem ter medo de se entregar.<br>
				Com um pouco de paciência, o amor há de reinar! <br>
				A pedida dos astros neste caso é a pizza metade Ômega e metade Olivia.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='libra-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Cancer.png' alt='Libra e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Senta aqui, vamos conversar. <br>
				Os librianos fazem de tudo um evento, já os cancerianos fazem da sessão Netflix sua festa particular. Existe carinho, romantismo e mimos. A sensibilidade de Câncer agrada Libra, e o jeito cuidadoso de Libra faz Câncer se sentir feliz e seguro. Os dois detestam briga e violência. Só não esqueçam que um toque de liberdade a essa relação é necessário. Para manter toda essa harmonia, aposte em encontros regados a muito bom humor e jantares refinados. <br>
				A pedida dos astros neste caso é a pizza metade Ômega e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "leao2"){
          echo "<div id='libra-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Leao.png' alt='Libra e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Se tratando do palco da vida, haja holofotes para esses dois signos. Mas sim, eles conseguirão dividir o palco e darão um show de romance e lealdade. Embora Leão seja impetuoso e Libra  mais espiritual, conseguirão se desenvolver mutuamente. <br>
				A pedida dos astros neste caso é a pizza metade Ômega e metade Grana Padano. Haja pizzas tão supremas para esse poder todo.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='libra-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Virgem.png' alt='Libra e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Na catraca seletiva de Virgem certamente os librianos terão passe livre. Na Astrologia, Virgem é o inferninho astral de Libra, mas isso não é tão importante para um signo que sabe lidar com diferentes perfis. A pedida dos astros neste caso é a pizza metade Ômega metade Alho-Poró. <br>
				Ah, mais uma coisa: não é não, viu, Libra? se Virgem falar que não vai sair, é ponto final.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "libra2"){
          echo "<div id='libra-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Libra.png' alt='Libra e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Primeiramente, o casal deve descer de cima do muro. Feito isso, agora sim esse casal de librianos poderá socializar junto e esbanjar sua elegância por aí afora. A pedida dos astros neste caso é a pizza Ômega, já que seu sabor equilibra requinte e ousadia. <br>
				Mas, pensando bem, os librianos nunca escolhem apenas um sabor de pizza. Sabe como é, né, melhor ter vários contatinhos, ops, quero dizer, várias opções.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='libra-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Escorpiao.png' alt='Libra e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Muita sedução envolvida, sim!<br>
				Os dois são signos muitos sedutores e muuuuito atraentes. Quando apaixonados, são muito leais no relacionamento. Mas o ciúme do escorpiano pode fazer com que o equilibrado libriano se irrite, portanto, procurem sempre ter bastante comunicação. Ah, já aproveita o papo e faz a pedida da pizza metade Sensazione e metade Ômega! É o recado dos astros.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='libra-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Sagitario.png' alt='Libra e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Quando um não quer, o outro insiste. Os librianos são intelectuais e os sagitarianos também. Mas enquanto Sagitário é profundo em assuntos que pedem mais seriedade, Libra já é teatral e experimental, trazendo um ar mais light, sem se aprofundar. A pedida dos astros, neste caso, é a pizza metade Ômega e metade Emiliana.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='libra-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Capricornio.png' alt='Libra e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Pode dar samba, mas a vida não é só carnaval, e o legal é que os dois saibam disso, já que prezam estabilidade e união. Se há um caminho a ser percorrido, eles chegarão lá juntos, Libra com muito glamour em cima do palco (ou do muro) e Capricórnio no backstage, mas chegarão gloriosos. A pedida dos astros, neste caso, é a pizza metade Ômega, com suas camadas de salmão e gotas generosas de cream cheese, e metade Speciale, com o sabor suave e marcante do milho, do bacon, do lombo defumado e do catupiry. <br>
				Avante, casal.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='libra-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Aquario.png' alt='Libra e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esses dois, do elemento ar, têm tudo para dar certo: são mentais, inteligentes e falantes. <br>
				Aquário valoriza a liberdade e é desapegado de bens materiais, já Libra valoriza tudo o que é do bom e do melhor, o que pode dificultar as coisas de vez em quando. Mas as festinhas e reuniões com os amigos colocarão a diversão em dia. Círculos sociais podem ser construídos em conjunto. <br>
				Esse relacionamento nunca cairá na rotina, por isso, a pedida certa é: metade Ômega e metade Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "libra" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='libra-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Libra/Libra-Peixes.png' alt='Libra e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Ômega e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Aqui vai depender da flexibilidade da vara de pescar para fisgar esse peixão e vice-versa. Peixes necessita de alguém que seja seu porto seguro 24 horas, já Libra, apesar de ser romântico, também é do badalo, então pode ser que fique em uma amizade colorida pra lá de psicodélica. <br>
				A pedida dos astros, neste caso, é a pizza metade Ômega e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        }
	
	//Escorpião
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "aries2"){
          echo "<div id='escorpiao-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Aries.png' alt='Escorpião e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esse encontro é atração fatal. Afinal, os opostos se atraem. Mas quem disse que signos de fogo e água não podem formar um belo par? <br>
				Quando há um objetivo de vida em comum, esse encontro pode dar samba. Isso porque, quando o sentimento é profundo, o afeto e a lealdade são tudo para os nativos de Áries e Escorpião. <br>
				Pra esses dois, a combinação perfeita é a pizza metade Baiana e metade Sensazione. Ingredientes picantes dessa combinação vão agradar o entusiasmado ariano, como pimenta dedo-de-moça e o mix de pimentões e pepperoni, já a intensidade da gorgonzola, da calabresa e a suavidade do cream cheese certamente vão agradar o intenso – porém exigente – escorpiano.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "touro2"){
          echo "<div id='escorpiao-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Touro.png' alt='Escorpião e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>ALERTA casalzão! Esses dois signos são um ímã um para o outro, já que o magnetismo é em altíssimo nível nessa relação. A única coisa que pode dar ruim entre vocês é o ciúme excessivo. Então, caso queiram algo duradouro, façam a egípcia para ficar tudo bem.<br>
				A pedida dos astros, neste caso, é a pizza metade Sensazione e metade Filé Mignon.
				</p>
			</div>	
		</div>"  ;
        } 
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='escorpiao-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Gemeos.png' alt='Escorpião e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Intensidade e alguma instabilidade, é o que melhor descreveria esse casal. Apesar das diferenças, podem formar uma combinação um tanto quanto interessante e exótica. Gêmeos não costuma cair de cabeça nas relações, mas se o escorpiano com toda sua sensualidade laçar o livre geminiano, a paixão irá vingar. A leveza de Gêmeos pode compensar o excesso de intensidade de Escorpião. Já o olhar mais profundo de Escorpião pode ajudar Gêmeos a ver a vida com menos superficialidade. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='escorpiao-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Cancer.png' alt='Escorpião e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Só vai! Vocês podem e devem se jogar nessa relação e, se tudo caminhar como achamos, será uma relação daquelas de causar inveja nos outros signos. Só uma dica: Escorpião, cuidado com a grosseria vez ou outra para não ferir esse coraçãozinho sentimentalista de Câncer.<br>
				A pedida dos astros neste caso é a pizza metade Sensazione e metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "leao2"){
          echo "<div id='escorpiao-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Leao.png' alt='Escorpião e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Possibilidades mil. Pode dar MUITO certo ou MUITO errado. Tudo MUITO grandioso nesse lance de vocês dois. Ambos possuem personalidade imponente, são inteligentes e sagazes. Mas o fato é que o misterioso Escorpião, junto com o impetuoso Leão, é química na certa. <br>
				A pedida dos astros neste caso é a pizza metade Speciale e metade Sensazione.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='escorpiao-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Virgem.png' alt='Escorpião e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Se há uma coisa que aguça o Escorpião é o mistério proposto pelo outro signo, e Virgem faz isso como ninguém, mas não é de propósito, acredite. Esse lance de casualidade entre virginiano e escorpiano é o princípio de algo muito maior, podendo virar amor no meio do caminho. A pedida dos astros neste caso é a pizza metade Sensazione e metade Alho-Poró. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "libra2"){
          echo "<div id='escorpiao-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Libra.png' alt='Escorpião e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Muita sedução envolvida, sim!<br>
				Os dois são signos muitos sedutores e muuuuito atraentes. Quando apaixonados, são muito leais no relacionamento. Mas o ciúme do escorpiano pode fazer com que o equilibrado libriano se irrite, portanto, procurem sempre ter bastante comunicação. Ah, já aproveita o papo e faz a pedida da pizza metade Sensazione e metade Ômega! É o recado dos astros. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='escorpiao-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Escorpiao.png' alt='Escorpião e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>“Fazer amor de madrugada/ Amor com jeito de virada/ Em cima da cama, debaixo da escada...” (emoji nota musical)<br>
				Todo o mundo sabe que esse casal é pura adrenalina. Não tem pessoa no mundo mais sensual, profunda e misteriosa no Zodíaco que o escorpiano... dois escorpianos, então, match na certa!<br>
				Nesse caso, a pedida certa é a Sensazione. A picância do Pepperoni e a intensidade da gorgonzola combinam bem com o paladar dos escorpianos, equilibrados pelo aroma suave do manjericão e do tomate-cereja e o sabor delicado do cream cheese.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='escorpiao-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Sagitario.png' alt='Escorpião e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Escorpião é água, e Sagitário é fogo... Seriam opostos? Talvez. Mas nada é impossível no amor, não é mesmo? Então, de certa forma, precisará de uma dedicação na relação dos pombinhos. Escorpião possui uma natureza intensa e sensível, já Sagitário é totalmente o contrário. É livre, gosta de se aventurar e tudo é um bom motivo para se fazer piadas. Independentemente de sentimentos, os dois são signos inteligentes e podem fluir com uma boa conversa. Personalidades à parte, para acompanhar e celebrar esse encontro, os astros indicam pedir a pizza metade Sensazione e metade Emiliana. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='escorpiao-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Capricornio.png' alt='Escorpião e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Na loteria do amor, essa aposta já é ganha - ou quase. Parem de ficar analisando demais um ao outro: partam pra ação, sejam felizes e se joguem nessa relação.  Afinal, vocês já tem química, e não existe razão pras coisas feitas pelo coração. O resultado pode surpreender: uma relação pé no chão, leal e profundamente intensa. <br>
				A pedida dos astros neste caso é a pizza metade Sensazione e metade Speciale. Azeitonas verdes recheadas dão o toque aromático que toda relação merece.<br>
				Tudo indica que os dois serão uma dupla dinâmica. Se deram bem, hein!
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='escorpiao-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Aquario-Escorpiao.png' alt='Escorpião e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A atração entre esses dois signos pode ser intensa, porém, a relação a longo prazo pode ser um tanto desafiadora, pelo jeito desapegado do Aquário de querer aproveitar a vida de forma leve, enquanto que o Escorpião preza o compromisso e se apega tanto que pode se sentir inseguro, mas havendo comunicação e respeito entre os dois, o Escorpião se apaixonará cada vez mais pela mente criativa de Aquário, que ama a intensidade de Escorpião. Principalmente quando forem dividir uma pizza comemorando o amor!<br>
				A pedida perfeita para esse casalzão é a pizza metade Sensazione e metade Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "escorpiao" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='escorpiao-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Escorpiao/Escorpiao-Peixes.png' alt='Escorpião e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Sensazione e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Temos aqui um exemplo claro de alma gêmea, vocês são amorosos, sensíveis, emotivos e apaixonados. Ficam tão em sintonia que até pela troca de olhares podem ler o pensamento um do outro. Atenção... Deixem o ciúme de lado, podem se jogar de cabeça nessa relação e convidar o mozão para comer pizza, até porque uma vai ser pouco para contar a história de vocês.<br>
				A sugestão é a pizza metade Sensazione e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        }
	
	//Sagitário
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "aries2"){
          echo "<div id='sagitario-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Aries.png' alt='Sagitário e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Ui, ALERTA crush magia. Romance, viagens, novidades, talvez não nessa ordem, necessariamente. O que importa é que a energia de vocês é contagiante. A pedida dos astros neste caso é a pizza metade Baiana metade Emiliana. Ingredientes como geleia de pimenta e gorgonzola, por exemplo, harmonizarão jantares pra lá de entusiasmados com esse casal.<br>
				Não precisa dizer mais nada, só vai!
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "touro2"){
          echo "<div id='sagitario-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Touro.png' alt='Sagitário e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa pode ser uma parceria criativa. Enquanto Sagitário é festeiro e vive no mundo da Lua, Touro é mais calmo e está com os pés bem ficados na Terra, naquilo que ele pode ver e tocar. Aí é que as coisas vão ficando interessantes: a convivência, a paixão e a força de vontade vão fazer com que vocês equilibrem seus interesses. Touro pode escutar os sonhos do Sagita, arriscar mais e sair da mesmice com suas aventuras, e o sagitariano pode aprender com o taurino a ter foco quando necessário e entender que um pouco de pé no chão é saudável. <br>
				E pra festejar essa parceria que tem grandes chances de dar certo, a pedida dos astros é a pizza metade Filé Mignon e metade Emiliana.
				</p>
			</div>	
		</div>"  ;
        } 
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='sagitario-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Gemeos.png' alt='Sagitário e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Liberdade pra dentro da cabeça. Estes dois signos precisam ser livres para explorar suas vidas, ao mesmo tempo em que mantêm um relacionamento. Se conseguirem fazer isso, então as chances de que este relacionamento funcione podem aumentar. A pedida dos astros neste caso é a pizza metade Emiliana e metade Olivia.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='sagitario-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Cancer.png' alt='Sagitário e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esse casal de opostos que se atraem promete ser repleta de riso e algumas lágrimas. Uma combinação deliciosa e com um toque de dramaticidade. Sagitário adora festejar e ter uma família não está em seus planos. Se o canceriano deseja se relacionar com este signo, terá que embarcar nas aventuras de Sagitário... mas pode muito bem usar de seu poder de persuasão emocional para conquistá-lo e fazê-lo mudar de ideia. Mas pra fazer acontecer de verdade, comunicação e honestidade é fundamental. Câncer, não faça tempestade em copo de água. E você, Sagitário, dizer tudo o que pensa pode magoar o canceriano. <br>   
				A pedida dos astros neste caso é a pizza metade Portuguesa, metade Emiliana, pra equilibrar sabores tradicionais e inusitados, como gorgonzola, presunto e geleia de pimenta.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "leao2"){
          echo "<div id='sagitario-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Leao.png' alt='Sagitário e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Alerta match! Alerta Crushzão! Leão adora a ideia de brilhar como a ideia de ser admirado, e Sagitário gosta muito de oferecer atenção, mas devemos deixar claro, o sagitariano não será o puxa-saco da vez.  Tudo tem limite. A pedida dos astros neste caso é a pizza metade Emiliana e metade Grana Padano.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='sagitario-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Virgem.png' alt='Sagitário e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A palavra de ordem é cautela. Há grandes possibilidades de que essa relação possa dar frutos, se ambos aprenderem a aceitar os pontos de vista diferentes um do outro, aprendendo que isso solucionar problemas diários e enriquecer a relação. A pedida dos astros neste caso é a pizza metade Emiliana metade Alho-Poró.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "libra2"){
          echo "<div id='sagitario-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Libra.png' alt='Sagitário e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Quando um não quer, o outro insiste. Os librianos são intelectuais e os sagitarianos também. Mas enquanto Sagitário é profundo em assuntos que pedem mais seriedade, Libra já é teatral e experimental, trazendo um ar mais light, sem se aprofundar. A pedida dos astros, neste caso, é a pizza metade Ômega e metade Emiliana.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='sagitario-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Escorpiao.png' alt='Sagitário e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Escorpião é água, e Sagitário é fogo... Seriam opostos? Talvez. Mas nada é impossível no amor, não é mesmo? Então, de certa forma, precisará de uma dedicação na relação dos pombinhos. Escorpião possui uma natureza intensa e sensível, já Sagitário é totalmente o contrário. É livre, gosta de se aventurar e tudo é um bom motivo para se fazer piadas. Independentemente de sentimentos, os dois são signos inteligentes e podem fluir com uma boa conversa. Personalidades à parte, para acompanhar e celebrar esse encontro, os astros indicam pedir a pizza metade Sensazione e metade Emiliana. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='sagitario-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Sagitario.png' alt='Sagitário e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Que soem as trombetas: avistamos um casal LACRAÇÃO! Ou quase.<br>
				Essa relação excêntrica tem tudo para dar certo, até porque não é todo zodíaco que topa extravagâncias mil, isto é, restaurantes, viagens e passeios exóticos. A pedida dos astros, neste caso, é a pizza Emiliana. Inusitada e maravilhosa, mescla gorgonzola e geleia de pimenta. <br>
				Mas cuidado: vocês precisam saber dosar a liberdade porque, se não, alguém aí vai acabar sem mozão. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='sagitario-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Capricornio.png' alt='Sagitário e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa é uma combinação delicada, pois os dois possuem jeitos únicos e a maneira de enxergar a vida são opostas, mas como diz o ditado, os opostos se atraem. Com o jeito discreto e responsável do Capricórnio, pode complementar o Sagitário, que tem um perfil mais leve e dinâmico, que pode começar a ver a vida de maneira mais 'séria'. O caprica, por sua vez, pode aprender com o sagitariano a viver a vida com mais leveza.<br>
				A pedida ideal para essa casalzão é a pizza metade Speciale e metade Emiliana.
				</p>
			</div>	
		</div>"   ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='sagitario-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Aquario.png' alt='Sagitário e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Casal prêmio Nobel da paz ou do zodíaco. A constância que o virginiano oferece é tudo o que o sagitariano deseja de um parceiro. A comunicação entre os dois é cheia da energia que os renova constantemente. A pedida dos astros neste caso é a pizza metade Emiliana e metade Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "sagitario" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='sagitario-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Sagitario/Sagitario-Peixes.png' alt='Sagitário e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Emiliana e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>O Sagitário é um signo que gosta de conhecer novos mundos e se comunicar com muitas pessoas. Peixes precisa se entregar totalmente à humanidade. Essa relação pode ser fantástica se houver um toque de pequenas doses diárias de compreensão. A pedida dos astros neste caso é a pizza metade Emiliana e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        }
	
	//Capricórnio
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "aries2"){
          echo "<div id='capricornio-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Aries.png' alt='Capricórnio e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Vocês são muito diferentes um do outro. Áries é impulsivo e ingênuo, já Capricórnio é ponderado e sábio. Mas o jogo duro de Capricórnio com o jeito galanteador de Áries pode acender uma grande paixão. Transparência e flexibilidade serão peças-chave para que essa relação dê certo. Se vocês souberem ceder, vocês têm tudo para ser a metade da pizza um do outro.<br>
				Os astros, neste caso, indicam que a pizza ideal é a metade Speciale e metade Baiana.
				</p>
			</div>	
		</div>" ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "touro2"){
          echo "<div id='capricornio-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Touro.png' alt='Capricórnio e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Avistamos um date perfeito. O que caprica e touro querem da vida: solidez financeira, solidez no trabalho, solidez no relacionamento, transformando a vida a dois em uma muralha da China ou quase isso. A pedida dos astros neste caso é a pizza metade Speciale e metade Filé Mignon. Suculência e consistência não hão de faltar.<br>
				Os dois olham muito para o futuro e buscam coisas muito parecidas, então, avante, queridos.
				</p>
			</div>	
		</div>" ;
        } 
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='capricornio-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Gemeos.png' alt='Capricórnio e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A relação entre esses dois signos tem tudo para dar certo, contanto que haja paciência e confiança entre as duas partes. Com o comprometimento e o jeito sonhador de Capricórnio, se tornará a segunda metade do signo de Gêmeos, que tem um perfil divertido e leve de aproveitar a vida. Se os dois souberem amenizar as diferenças e aprender com elas, poderão dividir pizzas com o mozão sempre em sintonia.<br>
				Essa combinação pede a pizza metade Speciale e metade Olivia.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='capricornio-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Cancer.png' alt='Capricórnio e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>É como costumamos dizer: ou dá bom ou dá ruim, já que se trata de signos que se complementam. A sintonia desse casal é afinadíssima, por pensarem de formas bem parecidas, aliviando possíveis atritos. A pedida dos astros neste caso é a pizza metade Speciale e metade Portuguesa. Ambos os sabores fazem dessa escolha assertiva. <br>
				Aqui vale frisar que o importante é saber que nem todo copo que transborda é sinal de abundância afetiva.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "leao2"){
          echo "<div id='capricornio-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Leao.png' alt='Capricórnio e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Dois signos duros na queda mas que podem ser um casal gracinha. O desapego de Capricórnio pode confundir Leão, que precisa se sentir endeusado praticamente o tempo todo. A pedida dos astros neste caso é a pizza metade Speciale e metade Grana Padano. Cada um com seu perfil gastronômico altamente saboroso. <br>
				Em todo o caso, ambos os signos têm o poder de criar algo muito sólido, basta aplicar doses diárias de paciência.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='capricornio-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Virgem.png' alt='Capricórnio e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>ALERTA de casal magia. Astrologicamente, vocês são um casalzão de causar inveja no zodíaco todo. Mas precisam dosar a seriedade e a dureza que essa relação tende a ter com o passar do tempo. A pedida dos astros, neste caso, é a pizza metade Speciale e metade Alho-Poró. O cream cheese é o ponto alto dos ingredientes. <br>
				Uma dica simples, mas necessária: não levem a vida tão a sério. Planilha de gerenciamento não se aplica para o coração, galera.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "libra2"){
          echo "<div id='capricornio-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Libra.png' alt='Capricórnio e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Pode dar samba, mas a vida não é só carnaval, e o legal é que os dois saibam disso já que prezam estabilidade e união. Se há um caminho a ser percorrido, eles chegarão lá juntos, Libra com muito glamour em cima do palco (ou do muro) e Capricórnio no backstage, mas chegarão gloriosos. A pedida dos astros, neste caso, é a pizza metade Speciale, metade Ômega, esta esbanjando sofisticação com suas camadas de salmão e gotas generosas de cream cheese. <br>
				Avante, casal.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='capricornio-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Escorpiao.png' alt='Capricórnio e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Na loteria do amor, essa aposta já é ganha - ou quase. Parem de ficar analisando demais um ao outro: partam pra ação, sejam felizes e se joguem nessa relação.  Afinal, vocês já tem química, e não existe razão pras coisas feitas pelo coração. O resultado pode surpreender: uma relação pé no chão, leal e profundamente intensa. <br>
				A pedida dos astros neste caso é a pizza metade Sensazione e metade Speciale. Azeitonas verdes recheadas dão o toque aromático que toda relação merece.<br>
				Tudo indica que os dois serão uma dupla dinâmica. Se deram bem, hein!
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='capricornio-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Sagitario.png' alt='Capricórnio e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa é uma combinação delicada, pois os dois possuem jeitos únicos e a maneira de enxergar a vida são opostas, mas como diz o ditado, os opostos se atraem. Com o jeito discreto e responsável do Capricórnio, pode complementar o Sagitário, que tem um perfil mais leve e dinâmico, que pode começar a ver a vida de maneira mais 'séria'. O caprica, por sua vez, pode aprender com o sagitariano a viver a vida com mais leveza.<br>
				A pedida ideal para essa casalzão é a pizza metade Speciale e metade Emiliana.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='capricornio-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Capricornio.png' alt='Capricórnio e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Ui, ALERTA casalzão prioridades. Sim, esse casal de capricas é compatível, estabilizado, leal e, se organizar, todo mundo sai amando. A pedida dos astros, neste caso, é a pizza Speciale, deliciosamente incrementada, mas sem frescura: lombinho, bacon, requeijão e milho, só ingrediente de responsa. <br>
				Essa relação tem grandes chances de não flopar se os dois mantiverem alguns projetos e sonhos em comum.<br>
				A pedida dos astros, nesse caso, é a Speciale.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='capricornio-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Aquario.png' alt='Capricórnio e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Mesmo com diferentes pensamentos, esses dois tem algo em comum! <br>
				O modernismo e o toque de rebeldia de Aquário se junta com a animação de Capricórnio e o match é certo. Mas não se engane: o capricorniano tem um lado certinho e equilibrado que mantém a solidez desse relacionamento. Por isso, a pedida para esse casal é a pizza metade Margherita e metade Speciale, para dar aquele toque aventureiro.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "capricornio" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='capricornio-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Capricornio/Capricornio-Peixes.png' alt='Capricórnio e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Speciale e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esse mar está pra peixe, sim. Esses dois signos, apesar do choque inicial das diferenças, tendem mais a se complementar do que se esquivar. A pedida dos astros, neste caso, é a pizza metade Speciale e metade Jéssica. <br>
				Haja pizzas para selar essa união, que tem tudo para ser Verdadeiramente Gostosa. 
				</p>
			</div>	
		</div>"  ;
        }
	
	//Aquário
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "aries2"){
          echo "<div id='aquario-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Aries.png' alt='Aquário e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Se tem uma frase mais apropriada para esses dois signos seria: “deixe-o livre, se voltar é seu.” Ou algo parecido com isso. O ariano tende a ser expansivo nas emoções, já o aquariano totalmente mental, mas isso não impede que saia algo bom dessa combinação. A pedida dos astros neste caso é a pizza metade Baiana metade Margherita. <br>
				Se porventura esse romance não sair, uma coisa é certa: pode rolar uma amizade excelente. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "touro2"){
          echo "<div id='aquario-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Touro.png' alt='Aquário e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Uma combinação pra lá de excêntrica. Para andarem juntos, esses dois vão ter que ter flexibilidade: Aquário vai ter que aterrissar em terra firme de vez em quando, e Touro vai ter que topar voar longe pelos ares com Aquário. Assim, as coisas vão fluir melhor entre vocês... <br>
				Resumindo: é preciso inovar e sair da rotina, mas com um toque de moderação.  <br>
				Nesse caso, a pedida ideal dos astros é a pizza metade Margherita e Filé Mignon.
				</p>
			</div>	
		</div>" ;
        } 
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='aquario-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Gemeos.png' alt='Aquário e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>E daí que Gêmeos pensa mil coisas ao mesmo tempo? Os aquarianos são adeptos do Deboísmo e da liberdade, e os geminianos não sentem nenhum desconforto com a liberdade de Aquário porque estão sempre ocupados com suas causas e objetivos de vida. Esse casal é pura sintonia. A pedida dos astros, neste caso, é a pizza metade Olivia e metade Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='aquario-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Cancer.png' alt='Aquário e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Excelentes amigos, camaradas, confidentes. Mas na conquista, Câncer precisa ir com calma, que esse vagalhão de emoções pode acabar espantando Aquário! <br>
				Há quem acredite que essa relação não vai vingar...será? Não se enganem: a verdade é que, por mais que o aquariano ame a liberdade, uma hora ele quer voltar para um lugar que possa chamar de lar. E ninguém melhor para proporcionar isso a ele do que o nativo de Câncer!  <br>
				A pedida ideal do astros para esse casal é a pizza Portuguesa e Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "leao2"){
          echo "<div id='aquario-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Leao.png' alt='Aquário e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Leão: desça um pouquinho do salto e embarque na causa do aquariano. Aquário: elogie o leonino, dê presentes...quem não gosta de ser agradado? Principalmente este signo.  Assim, vocês aprenderão muito um com o outro. Aqui, nessa combinação astrológica o que não vai faltar é paixão. A pedida dos astros neste caso é a pizza metade Grana Padano e metade Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='aquario-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Virgem.png' alt='Aquário e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esses dois tem espaço garantido no céu. Como não se emocionar com o casal mais engajado em causas sociais do zodíaco?<br>
				Enquanto Virgem usa seu poder analítico para melhorar o que já está existe, Aquário tem ideias grandes e mirabolantes – só não sabe direito como vai levá-las até o fim. Então, aí é que, juntos, vai dar em algo consistente. Mas atenção: Virgem, resista à tentação de controlar a liberdade de Aquário; Aquário, dê uma colher de chá e faça o Virgo se sentir seguro. Assim, vocês vão longe. Mas não se esqueçam que ninguém muda o mundo com fome, por isso, a pedida dos astros é a pizza meia Alho-Poró e meia Margherita. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "libra2"){
          echo "<div id='aquario-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Libra.png' alt='Aquário e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esses dois, do elemento ar, têm tudo para dar certo: são mentais, inteligentes e falantes. <br>
				Aquário valoriza a liberdade e é desapegado de bens materiais, já Libra valoriza tudo o que é do bom e do melhor, o que pode dificultar as coisas de vez em quando. Mas as festinhas e reuniões com os amigos colocarão a diversão em dia. Círculos sociais podem ser construídos em conjunto. <br>
				Esse relacionamento nunca cairá na rotina, por isso, a pedida certa é: metade Ômega e metade Margherita. 
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='aquario-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Escorpiao.png' alt='Aquário e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>A atração entre esses dois signos pode ser intensa, porém, a relação a longo prazo pode ser um tanto desafiadora, pelo jeito desapegado do Aquário de querer aproveitar a vida de forma leve, enquanto que o Escorpião preza o compromisso e se apega tanto que pode se sentir inseguro, mas havendo comunicação e respeito entre os dois, o Escorpião se apaixonará cada vez mais pela mente criativa de Aquário, que ama a intensidade de Escorpião. Principalmente quando forem dividir uma pizza comemorando o amor!<br>
				A pedida perfeita para esse casalzão é a pizza metade Sensazione e metade Margherita.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='aquario-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Sagitario.png' alt='Aquário e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Casal prêmio Nobel da paz ou do zodíaco. A constância que o virginiano oferece é tudo o que o sagitariano deseja de um parceiro. A comunicação entre os dois é cheia da energia que os renova constantemente. A pedida dos astros neste caso é a pizza metade Margherita e metade Emiliana.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='aquario-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Capricornio.png' alt='Aquário e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Mesmo com diferentes pensamentos, esses dois tem algo em comum! <br>
				O modernismo e o toque de rebeldia de Aquário se junta com a animação de Capricórnio e o match é certo. Mas não se engane: o capricorniano tem um lado certinho e equilibrado que mantém a solidez desse relacionamento. Por isso, a pedida para esse casal é a pizza metade Margherita e metade Speciale, para dar aquele toque aventureiro.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='aquario-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Aquario.png' alt='Aquário e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Os aquarianos juntos no amor serão um verdadeiro carnaval fora de época. Criativos, descolados e mente aberta, essa união será um evento. A pedida dos astros, neste caso, é a pizza Margherita. Sim-ples-men-te incrível, essa pizza é um ícone da Itália que conquistou paladares do mundo todo, logo, é a pizza ideal para esse casal humanitário. <br>
				Os dois precisam tomar cuidado com as palavras porque, promessas quebradas nem super bonder cola, né, meus jovens.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "aquario" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='aquario-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Aquario/Aquario-Peixes.png' alt='Aquário e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Margherita e Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Peixes, pra nadar nesse Aquário imenso, é preciso uma dose de compreensão e boa comunicação. Afinal, para o romântico e sensitivo Peixes, o excêntrico aquariano às vezes pode parecer desapegado e pouco emotivo, mas, longe disso! na verdade, ele está preocupado com algum plano mirabolante para melhorar o planeta.  Então aqui vão alguns conselhos: aproveitem para aprender um com o outro passando mais momentos juntos. E podem pedir uma pizza meia Jéssica e meia Margherita pra acompanhar, a pedida zodiacal ideal!
				</p>
			</div>	
		</div>"  ;
        }
	
	//Peixes
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "aries2"){
          echo "<div id='peixes-aries'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Aries.png' alt='Peixes e Áries'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Baiana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Essa é uma combinação delicada, Áries com seu jeito extrovertido e impulsivo, às vezes não consegue compreender o signo de Peixes, que é sonhador e sensível, mas com uma pitada de compreensão de ambos, vocês podem se tornar um casalzão pra vida inteira.<br>
				Atenção! Vocês podem se apaixonar logo na primeira fatia, digo, à primeira vista. A pedida dos astros nessa relação é a pizza metade Baiana e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "touro2"){
          echo "<div id='peixes-touro'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Touro.png' alt='Peixes e Touro'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Filé Mignon<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esse flerte é todo sensorial. Touro é realista e perceptivo, enquanto Peixes é sonhador e sensitivo. Sentir além do que se vê é um tanto poético, e por isso esses dois signos dão liga para ir adiante.<br>
				Pode ter começado com uma amizade, já que Touro é realista e sensorial, enquanto Peixes é idealista e sensitivo. A pedida dos astros neste caso é a pizza metade Jéssica, metade Filé Mignon. 
				</p>
			</div>	
		</div>" ;
        } 
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "gemeos2"){
          echo "<div id='peixes-gemeos'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Gemeos.png' alt='Peixes e Gêmeos'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Olivia<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Entre a emoção e a razão fica o quê? Fica o questionamento se pode dar certo ou não esse lance de vocês dois. No entanto, esse romance pode dar certo. É que Peixes é flexível e todo amorzinho e, se Gêmeos entrar nesse clima, vai garantir uma sintonia bacana. A pedida dos astros neste caso é a pizza metade Jéssica e metade Olivia.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "cancer2"){
          echo "<div id='peixes-cancer'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Cancer.png' alt='Peixes e Câncer'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Portuguesa<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Alerta crush magia. Essa dupla talvez seja a mais “melação” do zodíaco, isso porque ambos são altamente apaixonantes e apaixonáveis. Só não se esqueça, alguém tem que tomar partido aí para começar a desenrolar essa história de amor. A pedida dos astros neste caso é a pizza metade Jéssica metade Portuguesa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "leao2"){
          echo  "<div id='peixes-leao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Leao.png' alt='Peixes e Leão'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Grana Padano<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Um quer ser contemplado, já o outro busca o templo.<br>
				Os interesses da pessoa de Peixes não se limitam ao próprio ego quanto os da pessoa de Leão. Peixes não tem nenhum desejo de competir com ninguém, o que dá estabilidade no relacionamento entre esses dois signos. A pedida dos astros neste caso é a pizza metade Jéssica e metade Grana Padano.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "virgem2"){
          echo "<div id='peixes-virgem'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Virgem.png' alt='Peixes e Virgem'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Alho-Poró<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Diferenças que unem são no mínimo interessantes e trazem bons aprendizados. Peixes adora  viagens mentais – ficar no mundo da lua. Virgem é intelectual e está sempre com os pés bem plantados no chão. Vocês tem boas chances de mesclar essas características e formar um casalzão. A pedida dos astros neste caso é a pizza metade Jéssica e metade Alho-Poró.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "libra2"){
          echo "<div id='peixes-libra'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Libra.png' alt='Peixes e Libra'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Ômega<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Aqui vai depender da flexibilidade da vara de pescar para fisgar esse peixão e vice-versa. Peixes necessita de alguém que seja seu porto seguro 24 horas, já Libra, apesar de ser romântico, também é do badalo, então pode ser que fique em uma amizade colorida pra lá de psicodélica.<br>
				A pedida dos astros, neste caso, é a pizza metade Jéssica e metade Ômega.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "escorpiao2"){
          echo "<div id='peixes-escorpiao'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Escorpiao.png' alt='Peixes e Escorpião'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Sensazione<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Temos aqui um exemplo claro de alma gêmea, vocês são amorosos, sensíveis, emotivos e apaixonados. Ficam tão em sintonia que até pela troca de olhares podem ler o pensamento um do outro. Atenção... Deixem o ciúme de lado, podem se jogar de cabeça nessa relação e convidar o mozão para comer pizza, até porque uma vai ser pouco para contar a história de vocês.<br>
				A sugestão é a pizza metade Sensazione e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "sagitario2"){
          echo "<div id='peixes-sagitario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Sagitario.png' alt='Peixes e Sagitário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Emiliana<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>O Sagitário é um signo que gosta de conhecer novos mundos e se comunicar com muitas pessoas. Peixes precisa se entregar totalmente à humanidade. Essa relação pode ser fantástica se houver um toque de pequenas doses diárias de compreensão. A pedida dos astros neste caso é a pizza metade Emiliana e metade Jéssica.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "capricornio2"){
          echo "<div id='peixes-capricornio'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Capricornio.png' alt='Peixes e Capricórnio'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Speciale<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Esse mar está pra peixe, sim. Esses dois signos, apesar do choque inicial das diferenças, tendem mais a se complementar do que se esquivar. A pedida dos astros, neste caso, é a pizza metade Jéssica e metade Speciale. <br>
				Haja pizzas para selar essa união, que tem tudo para ser Verdadeiramente Gostosa.
				</p>
			</div>	
		</div>"  ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "aquario2"){
          echo "<div id='peixes-aquario'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Aquario.png' alt='Peixes e Aquário'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica e Margherita<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Peixes, pra nadar nesse Aquário imenso, é preciso uma dose de compreensão e boa comunicação. Afinal, para o romântico e sensitivo Peixes, o excêntrico aquariano às vezes pode parecer desapegado e pouco emotivo, mas, longe disso! na verdade, ele está preocupado com algum plano mirabolante para melhorar o planeta.  Então aqui vão alguns conselhos: aproveitem para aprender um com o outro passando mais momentos juntos. E podem pedir uma pizza meia Jéssica e meia Margherita pra acompanhar, a pedida zodiacal ideal!
				</p>
			</div>	
		</div>" ;
        } 
	
	if($_POST['signo1'] == "peixes" AND $_POST['signo2'] == "peixes2"){
          echo "<div id='peixes-peixes'>
			<div class='pizza-signos'>
				<img src='images/combinacoes/Peixes/Peixes-Peixes.png' alt='Peixes e Peixes'>
			</div>

			<div class='signo-descricao'>
				<h2 style='text-align: center; font-family: lobster; color: #FFF;font-size: 60px;font-weight: 100;'>Jéssica<br>(".$signo1." e ".$signo2.")</h2>
				<p style='text-align: left;'>Sonhadores natos, sensíveis e místicos. Esse casal de piscianos têm boas chances de dar certo. Mas devem ter cuidado para não criar um mundo cor-de-rosa idealizado porque a realidade uma hora bate à porta, né, migos. A pedida dos astros neste caso é a pizza Jéssica. Ingredientes leves e com aromas delicados como shimeji, brócolis e bacon. <br>
				Nessa relação não vai faltar cartinhas de amor, romance e declarações, e junto com isso pode vir uma megadose de realidade (para dar suporte a essas cabecinhas) para ficarem juntos.
				</p>
			</div>	
		</div>"  ;
        }
	
	?>
