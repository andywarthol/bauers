$.validator.addMethod("bankaccountNL",function(t,a){if(this.optional(a))return!0;if(!/^[0-9]{9}|([0-9]{2} ){3}[0-9]{3}$/.test(t))return!1;var n=t.replace(/ /g,""),e=0,r=n.length,i,o,u;for(i=0;r>i;i++)o=r-i,u=n.substring(i,i+1),e+=o*u;return e%11===0},"Please specify a valid bank account number");