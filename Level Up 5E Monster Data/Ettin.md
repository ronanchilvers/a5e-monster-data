---
statblock: true
name: Ettin
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Giant
cr: 4
ac: 12
hp: 85
hit_dice: '10d10 + 30'
speed: '40 ft.'
stats:
    - 20
    - 8
    - 16
    - 8
    - 10
    - 8
saves:
    - { strength: 7 }
    - { constitution: 5 }
skillsaves:
    - { perception: 2 }
senses: 'darkvision 60 ft., passive Perception 12 (17 with Two Heads)'
languages: 'Common, Giant, Orc'
traits:
    - { name: 'Reactive Heads', desc: 'The ettin can take two reactions each round, but not more than one per turn.' }
    - { name: 'Two Heads', desc: "While both heads are awake, the ettin has advantage on Perception checks and on saving throws against being blinded, charmed, deafened, frightened, stunned, and knocked unconscious, and it can't be flanked." }
    - { name: Wakeful, desc: "When one of the ettin's heads is asleep, the other is awake." }
actions:
    - { name: Multiattack, desc: 'The ettin makes a battleaxe attack and a club attack.' }
    - { name: Battleaxe, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 14 (2d8 + 5) slashing damage.' }
    - { name: Club, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 14 (2d8 + 5) bludgeoning damage. If the target is a creature and the ettin is bloodied, the target makes a DC 15 Strength check and is knocked prone on a failure.' }
    - { name: Rock, desc: 'Ranged Weapon Attack: +7 to hit, range 30/90 ft., one target. Hit: 21 (3d10 + 5) bludgeoning damage.' }
    - { name: 'Axe Whirl (1/Day)', desc: 'The ettin makes a battleaxe attack against each creature within 10 feet.' }
combat:
    - { name: 'The ettin makes no effort to coordinate its attacks against the same opponent', desc: 'The ettin uses Axe Whirl if it can target three or more creatures. Ettins rarely retreat.' }

---
```statblock
monster: Ettin
```
