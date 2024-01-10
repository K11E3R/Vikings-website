# Vikings




# DB 


## Objectif: (facilitate communication / automation)

## Entities

- Manager
- Coach (stage / full time / part time / benev / service civique)
- Client (athlete / loisir / ecole de natation) (couleur) (nom de groupe)

## Parameters

- Client (defined by group)

- Manager: planifie piscine:
        - Disponibilite (temp / ligne / groupe (coach))
        - Planifie le coache:
                - La seance en fonction du coach
                - Le groupe de client
                - Definir plan de travail
        - Planifie minibus:
                - Disponibilite (temp / coach / event)
        - Planifie client:
                - Inscription (assign to group)
                - Planification d'event

- Visualisation du plan du club

- Client:
        - Date de la reinscription
        - Changement plan (alerte)

- Coach:
        - Planification du client dans l'event
        - Plan de travail
        - Responsabilite stagere:
                - Plan stagere

- Entre coach <=> client (chat)
- Entre manager <=> coach (chat)
- Entre manager => client (informative)

- Groupe defined client => assign coach by manager

- Manager definie la disponibilite de la piscine et les lignes dans chaque piscine
- Tout piscine dispose de 1 a n lignes
- Tout client est assigner a un groupe automatiquement dans l'inscription
- 30min minimum + 15min per slide
