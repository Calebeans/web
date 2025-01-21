async function enviaDadosParaAPI(e) {
    e.preventDefault();
    const dados = new FormData(e.target);
    const opt = {
      method: "POST",
      body: dados,
    };
    const res = await fetch("http://localhost/Aula-01-14/carta/inserir", opt);
    const json = await res.json();
    alert(json.status);
  }
  
  document.querySelector("form").addEventListener("submit", enviaDadosParaAPI);