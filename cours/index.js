const cours = {
   algo: {
      cours1: {
         code: `<iframe class="code"
         src="/e-enseignement/src/cours/algo/COURS_CHAPITRE_1_NOTIONS_GENERALES.pdf"
         style="display: block"
         loading="lazy"
         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
         height="100%"
         width="100%" >
     </iframe>`
      },
      cours2: {
         code: `<iframe class="code"
         src="/e-enseignement/src/cours/algo/COURS_CHAPITRE_2_ALTERNATIVES.pdf"
         style="display: block"
         loading="lazy"
         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
         height="100%"
         width="100%" >
     </iframe>`
      },
      cours3: {
         code: `<iframe class="code"
         src="/e-enseignement/src/cours/algo/COURS_Chapitre_3_LES_BOUCLES.pdf"
         style="display: block"
         loading="lazy"
         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
         height="100%"
         width="100%" >
     </iframe>`
      },
      cours4: {
         code: `<iframe class="code"
         src="/e-enseignement/src/cours/algo/COURS_PROCEDURE_ET_FONCTION.pdf"
         style="display: block"
         loading="lazy"
         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
         height="100%"
         width="100%" >
     </iframe>`
      }
   },
   model: {
      cours1: {
         code: `<iframe class="code"
                src="/e-enseignement/src/cours/model/COURS_Modelisation_Merise.pdf"
                style="display: block"
                loading="lazy"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                height="100%"
                width="100%" >
            </iframe>`,
      },
      cours2: {
         code: `<iframe class="code"
                src="/e-enseignement/src/cours/model/COURS_1_SQL_REQUETE_DE_BASE.pdf"
                style="display: block"
                loading="lazy"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                height="100%"
                width="100%" >
            </iframe>`,
      },
      cours3: {
         code: `<iframe class="code"
                src="/e-enseignement/src/cours/model/COURS_SQL_LES_JOINTURES.pdf"
                style="display: block"
                loading="lazy"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                height="100%"
                width="100%" >
            </iframe>`,
      }
   },
}

function doSomething(el) {
   document.querySelectorAll(".item").forEach(function (el) {
      el.classList.remove("active");
   });
   el.classList.toggle("active");
}

function doSomeOtherthing(el) {
   document.querySelectorAll(".cours").forEach(function (el) {
      el.classList.remove("active");
   });
   el.classList.toggle("active");
   showCode();
}
function showCode() {
   const code = document.querySelector(".playground");
   const item = document.querySelector(".cours.active");
   const coursValue = item.getAttribute("data-cours");
   const typeValue = item.getAttribute("date-type");
   code.innerHTML = cours[typeValue][coursValue].code;
}
window.onload = function () {
   showCode();
}