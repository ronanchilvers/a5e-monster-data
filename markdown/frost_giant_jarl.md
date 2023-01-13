---
statblock: true
name: 'Frost Giant Jarl - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Giant
cr: 12
ac: 15
hp: 184
hit_dice: '16d12 + 80'
speed: '40 ft.'
stats:
    - 22
    - 8
    - 20
    - 10
    - 10
    - 12
damage_immunities: cold
saves:
    - { strength: 10 }
    - { constitution: 9 }
    - { wisdom: 4 }
    - { charisma: 5 }
skillsaves:
    - { athletics: 10 }
    - { perception: 4 }
    - { survival: 4 }
senses: 'passive Perception 14'
languages: 'Common, Giant'
traits:
    - { name: 'Fire Fear', desc: 'When the giant takes fire damage, it is rattled until the end of its next turn.' }
actions:
    - { name: Multiattack, desc: 'The giant makes two melee weapon attacks.' }
    - { name: Battleaxe, desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 22 (3d10 + 6) slashing damage. If the target is a Large or smaller creature, it makes a DC 18 Strength saving throw, falling prone on a failure.' }
    - { name: Rock, desc: 'Ranged Weapon Attack: +10 to hit, range 60/240 ft., one target. Hit: 37 (9d6 + 6) bludgeoning damage. If the target is a Large or smaller creature, it makes a DC 18 Strength saving throw, falling prone on a failure. In lieu of a rock, the giant can throw a grappled Medium or smaller creature up to 40 feet. On a hit, the target and the thrown creature both take 19 (4d6 + 5) bludgeoning damage. On a miss, only the thrown creature takes the damage. The thrown creature falls prone in an unoccupied space 5 feet from the target.' }
'bonus actions':
    - { name: Grab, desc: "One creature within 5 feet makes a DC 11 Dexterity saving throw. On a failure, it is grappled (escape DC 18). Until this grapple ends, the giant can't grab another target, and it makes battleaxe attacks with advantage against the grappled target." }
    - { name: 'Stomp (1/Day)', desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one prone target. Hit: 13 (3d4 + 6) bludgeoning damage.' }
    - { name: 'Icy Gaze', desc: 'One creature the giant can see within 60 feet makes a DC 17 Constitution saving throw. On a failure, it takes 21 (6d6) cold damage, and its Speed is halved until the end of its next turn. On a success, it takes half as much damage.' }
combat:
    - { name: 'The frost giant prefers melee, using its battleaxe and grabbing or stomping when it can', desc: 'The frost giant only flees if it takes fire damage while it is bloodied.' }

---
```statblock
monster: Frost Giant Jarl - A5E
```
