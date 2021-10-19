// macro getcpf_debora(cpf) { //Macro Importada
// 	Set(maxtent_cpf=2);
// 	getcpf:
// 	Set(maxtent_cpf=${MATH(${maxtent_cpf}-1|int)});
// // Vai para Macro
// // Espera 180 segundos
// 	WaitMSG(180);
// 	if(${HAVEMSG} = 0 ){
// 		if($(maxtcpf} > 0){
// 			goto(getcpf);
// 		}else{
// 			goto(ura_chat_debora|finalizar|1);
// 		};
// 		};

	
	
// // guarda cpf
// 	Set(cpf=${USERMSG});
// // se for digitado
// 	//if(${HAVEMSG} = 1) {
// // Condicional que verifica se o CPF tem 11
// 		if(${LEN(${cpf})} = 11) {
// // Função (VCPF) faz o calculo para verificar se o cpf valido
// 			VCPF(${cpf}|cpf_valido);
// 			if(${cpf_valido} = 1) {
// 				Set(num_cpf=${cpf});
// 				SendMSG(${SESSIONID}|CPF correto|pt-BR|N|N|N|FULLWEBCHAT);
// 			} else {
// 				SendMSG(${SESSIONID}|Número do CPF informado inválido!|pt-BR||N|N|FULLWEBCHAT);
// 				Wait(1);
// 				if(${maxtent_cpf} > 0 ){
// 					goto(getcpf);
// 				}else{
// 					goto(ura_chat_debora|finalizar|1);
// 				};
// 			}; //End If
// 		} else {
// 			SendMSG(${SESSIONID}|Número do CPF informado inválido!|pt-BR||N|N|FULLWEBCHAT);
// 			Wait(1);
// 			if(${maxtent_cpf} > 0){
// 				SendMSG(${SESSIONID}|Por favor\, digite o número do CPF novamente.|pt-BR||N|N|FULLWEBCHAT);
// 				goto(get_cpf);
// 			} else {
// 				goto(ura_chat_teste|finalizar|1);	
// 			};
			
// 		}; //End If
// 	//}; //End If
// }; // Final da Macro [getcpf_debora(cpf)]