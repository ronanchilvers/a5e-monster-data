---
statblock: true
name: 'Chuul - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Aberration
cr: 5
ac: 16
hp: 93
hit_dice: '11d10 + 33'
speed: '30 ft., swim 40 ft.'
stats:
    - 18
    - 10
    - 16
    - 5
    - 16
    - 10
damage_immunities: poison
condition_immunities: 'frightened, poisoned'
senses: 'darkvision 60 ft., passive Perception 13'
languages: "understands Deep Speech but can't speak"
traits:
    - { name: Amphibious, desc: 'The chuul can breathe air and water.' }
    - { name: 'Detect Magic', desc: 'The chuul senses a magical aura around any visible creature or object within 120 feet that bears magic.' }
actions:
    - { name: Multiattack, desc: 'If the chuul is grappling a creature, it uses its tentacle on that creature. It then makes two pincer attacks.' }
    - { name: Pincer, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one Large or smaller target. Hit: 11 (2d6 + 4) bludgeoning damage. If the target is a creature, it is grappled (escape DC 15). When carrying a grappled creature, the chuul can move at full speed. A pincer that is being used to grapple a creature can be used only to attack that creature.' }
    - { name: Tentacle, desc: 'A grappled creature makes a DC 14 Constitution saving throw. On a failure, it is paralyzed for 1 minute. The creature repeats the saving throw at the end of each of its turns, ending the paralysis on a success.' }
combat:
    - { name: 'The chuul seeks out magical treasure', desc: 'It uses its Detect Magic ability to choose the target with the most visible magic items. The chuul tries to grapple that creature and then paralyze it on the next turn. Once the chuul has at least one creature seized, it retreats, trying to carry its victim to its master.' }

---
```statblock
monster: Chuul - A5E
```
