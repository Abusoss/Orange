const exercices = {
   algo: {
      exo1: {
         ennoncé: "Description de l'exo 1",
         code: `<pre>
                Algo: perimetreSurfaceRectangle
                Declaration: LG,LR,P,
                S: réel
                Début:
                  Afficher("Donner la largeur 1: ")
                  Saisir(LR)
                  Afficher("Donner la longeur 2: '')
                  Saisir(LG) P = LG * 2 + LR * 2 S = LG * LR
                  Afficher("Le périmetre du rectangle est de : '', P)
                  Afficher("La surface du rectangle est de : '', S)
                Fin perimetreSurfaceRectangle
            </pre>`
      },
      exo2: {
         ennoncé: "Description de l'exo 2",
         code: `<pre>
                Algo: perimetreSurfaceRectangle
                Declaration: LG,LR,P,
                S: réel
                Début:
                Afficher("Donner la largeur 1: ")
                Saisir(LR)
                Afficher("Donner la longeur 2: '')
                Saisir(LG) P = LG * 2 + LR * 2 S = LG * LR
                Afficher("Le périmetre du rectangle est de : '', P)
                Afficher("La surface du rectangle est de : '', S)
                Fin perimetreSurfaceRectangle
            </pre>`
      },
      exo3: {
         ennoncé: "Description de l'exo 3",
         code: `<pre>
                Algo: perimetreSurfaceRectangle
                Declaration: LG,LR,P,
                S: réel
                Début:
                Afficher("Donner la largeur 1: ")
                Saisir(LR)
                Afficher("Donner la longeur 2: '')
                Saisir(LG) P = LG * 2 + LR * 2 S = LG * LR
                Afficher("Le périmetre du rectangle est de : '', P)
                Afficher("La surface du rectangle est de : '', S)
                Fin perimetreSurfaceRectangle
            </pre>`
      }
   },
   php: {
      exo1: {
         ennoncé: "Description de l'exo 1",
         code: `<iframe class="code"
                src="https://phpsandbox.io/e/x/qgc31?&layout=EditorPreview&iframeId=xds3d4utc&theme=dark&defaultPath=/&showExplorer=no"
                style="display: block"
                loading="lazy"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                height="100%"
                width="100%" >
            </iframe>`,
      },
      exo2: {
         ennoncé: "Description de l'exo 2",
         code: `<iframe class="code"
                src="https://phpsandbox.io/e/x/qgc31?&layout=EditorPreview&iframeId=xds3d4utc&theme=dark&defaultPath=/&showExplorer=no"
                style="display: block"
                loading="lazy"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                height="100%"
                width="100%" >
            </iframe>`,
      },
      exo3: {
         ennoncé: "Description de l'exo 3",
         code: `<iframe class="code"
                src="https://phpsandbox.io/e/x/qgc31?&layout=EditorPreview&iframeId=xds3d4utc&theme=dark&defaultPath=/&showExplorer=no"
                style="display: block"
                loading="lazy"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                height="100%"
                width="100%" >
            </iframe>`,
      }
   },
   c: {
      exo1: {
         ennoncé: "Description de l'exo 1",
         code: `<iframe src="https://replit.com/@LoulouxSilverGu/exo1?embed=true" style="width: 1px;max-width: 100%;min-width: 100%;overflow: hidden;" width="100%" height="100%" />`
      },
      exo2: {
         ennoncé: "Description de l'exo 2",
         code: `<iframe class="code"
                src="https://phpsandbox.io/e/x/qgc31?&layout=EditorPreview&iframeId=xds3d4utc&theme=dark&defaultPath=/&showExplorer=no"
                style="display: block"
                loading="lazy"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                height="100%"
                width="100%">
            </iframe>`
      },
      exo3: {
         ennoncé: "Description de l'exo 3",
         code: `<iframe class="code"
                src="https://phpsandbox.io/e/x/qgc31?&layout=EditorPreview&iframeId=xds3d4utc&theme=dark&defaultPath=/&showExplorer=no"
                style="display: block"
                loading="lazy"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                height="100%"
                width="100%">
            </iframe>`
      }
   }
}

function doSomething(el) {
   document.querySelectorAll(".item").forEach(function (el) {
      el.classList.remove("active");
   });
   el.classList.toggle("active");
}

function doSomethingElse(el) {
   document.querySelectorAll(".type").forEach(function (el) {
      el.classList.remove("active");
   });
   el.classList.toggle("active");
   showCode();
}
function doSomeOtherthing(el) {
   document.querySelectorAll(".exo").forEach(function (el) {
      el.classList.remove("active");
   });
   el.classList.toggle("active");
   showCode();
}
function showCode() {
   const code = document.querySelector(".playground");
   const type = document.querySelector(".type.active");
   const exo = document.querySelector(".exo.active");
   const exoValue = exo.getAttribute("data-exo")
   const typeValue = type.getAttribute("data-type")
   code.innerHTML = exercices[typeValue][exoValue].code;
}
window.onload = function () {
   showCode();
}