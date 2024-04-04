const cnpj = document.getElementById("txtCnpj");
cnpj.addEventListener("blur", () => {
    let cnpj = document.getElementById('txtCnpj').value;
    
            if(cnpj !== "")
            {
            let url = "https://brasilapi.com.br/api/cnpj/v1/" + cnpj;
            let req = new XMLHttpRequest();
            req.open("GET", url);
            req.send();

            req.onload = function() 
            {
                if(req.status===200)
                {
                    let informacao = JSON.parse(req.response);
                    document.getElementById("txtRazaoSocial").value = informacao.razao_social;
                    document.getElementById("txtNomeFantasia").value = informacao.nome_fantasia;
                    document.getElementById("txtTipoLogradouro").value = informacao.descricao_tipo_de_logradouro;
                    document.getElementById("txtLogradouro").value = informacao.logradouro;
                    document.getElementById("txtComplemento").value = informacao.complemento;
                    document.getElementById("txtCep").value = informacao.cep;
                    document.getElementById("txtNumero").value = informacao.numero;
                    buscarCep();
                }else if(this.response.status === 404)
                {
                    alert("CNPJ não encontrado");
                } else {
                    alert("Erro, CNPJ inválido");
                }
            }
        }
    }
    );
    

    function buscarCep() {
        let cep = document.getElementById('txtCep').value;
        
                if(cep !== "")
                {
                    let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
                    let req = new XMLHttpRequest();
                    req.open("GET", url);
                    req.send();
        
                    req.onload = function() 
                    {
                        if(req.status===200)
                        {
                            let endereco = JSON.parse(req.response);
                            document.getElementById("txtCidade").value = endereco.city;
                            document.getElementById("txtEstado").value = endereco.state;
                            document.getElementById("txtBairro").value = endereco.neighborhood;
                            document.getElementById("txtRua").value = endereco.street;
                        }else if(this.response.status === 404)
                        {
                            alert("CEP não encontrado");
                        } else {
                            alert("Erro, CEP inválido");
                        }
                    }
                }
        }