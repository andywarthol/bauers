$.validator.addMethod("vinUS",function(i){if(17!==i.length)return!1;var e=["A","B","C","D","E","F","G","H","J","K","L","M","N","P","R","S","T","U","V","W","X","Y","Z"],n=[1,2,3,4,5,6,7,8,1,2,3,4,5,7,9,2,3,4,5,6,7,8,9],r=[8,7,6,5,4,3,2,10,0,9,8,7,6,5,4,3,2],a=0,t,f,d,l,o,s;for(t=0;17>t;t++){if(l=r[t],d=i.slice(t,t+1),8===t&&(s=d),isNaN(d)){for(f=0;f<e.length;f++)if(d.toUpperCase()===e[f]){d=n[f],d*=l,isNaN(s)&&8===f&&(s=e[f]);break}}else d*=l;a+=d}return o=a%11,10===o&&(o="X"),o===s?!0:!1},"The specified vehicle identification number (VIN) is invalid.");