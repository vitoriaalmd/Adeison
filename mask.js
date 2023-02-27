function mascara(mascaraInput) {

    tamanhoInputTelFixo const = document.getElementById('telmae').maxLength
        let valorInputTelFixo = document.getElementById('telmae').value
        const mascaraTelFixo= {
            TelMae : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '( $ 1) $ 2-$ 3 ')
        };
    
        if(valorInputTelFixo.length ==tamanhoInputTelFixo){
            document.getElementById('telmae').value = mascaraTelFixo[mascaraInput]
        }
    }



    function mascaraa(mascaraInput) {

        tamanhoInputTelFixo const = document.getElementById('telpai').maxLength
            let valorInputTelFixo = document.getElementById('telpai').value
            const mascaraTelFixo= {
                TelPai : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '( $ 1) $ 2-$ 3 ')
            };
        
            
            if(valorInputTelFixo.length ==tamanhoInputTelFixo){
                document.getElementById('telpai').value = mascaraTelFixo[mascaraInput]
            }
        }


        function mascaraCP(mascaraInput) {

            tamanhoInputTelFixo const = document.getElementById('cpfpai').maxLength
                let valorInputTelFixo = document.getElementById('cpfpai').value
                const mascaraTelFixo= {
                    CpfPai : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2} ).*/, '$1.$2.$3-$4' )
                };
            
                
                if(valorInputTelFixo.length ==tamanhoInputTelFixo){
                    document.getElementById('cpfpai').value = mascaraTelFixo[mascaraInput]
                }
            }
    

            function mascaraCM(mascaraInput) {

                tamanhoInputTelFixo const = document.getElementById('cpfmae').maxLength
                    let valorInputTelFixo = document.getElementById('cpfmae').value
                    const mascaraTelFixo= {
                        CpfMae : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2} ).*/, '$1.$2.$3-$4' )
                    };
                
                    
                    if(valorInputTelFixo.length ==tamanhoInputTelFixo){
                        document.getElementById('cpfmae').value = mascaraTelFixo[mascaraInput]
                    }
                }

