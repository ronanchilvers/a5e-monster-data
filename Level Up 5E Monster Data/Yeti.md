---
statblock: true
name: Yeti
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 4
ac: 12
hp: 68
hit_dice: '8d10 + 24'
speed: '40 ft., climb 40 ft.'
stats:
    - 18
    - 12
    - 16
    - 8
    - 12
    - 16
damage_immunities: cold
skillsaves:
    - { perception: 3 }
    - { stealth: 3 }
senses: 'passive Perception 13'
languages: Yeti
traits:
    - { name: Camouflage, desc: 'The yeti has advantage on Stealth checks made to hide in snowy terrain.' }
    - { name: 'Fire Fear', desc: 'When the yeti takes fire damage, it is rattled until the end of its next turn.' }
    - { name: 'Storm Sight', desc: "The yeti's vision is not obscured by weather conditions." }
actions:
    - { name: Multiattack, desc: 'The yeti uses Chilling Gaze and makes two claw attacks.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +6 to hit, reach 10 ft., one target. Hit: 9 (2d4 + 4) slashing damage.' }
    - { name: 'Chilling Gaze (Gaze)', desc: "One creature within 30 feet that is not immune to cold damage makes a DC 13 Constitution saving throw. On a failure, the creature takes 10 (3d6) cold damage and is paralyzed for 1 minute. It repeats the saving throw at the end of each of its turns, ending the effect on a success. If a creature's saving throw is successful or the effect ends for it, it is immune to any Chilling Gaze for 24 hours." }
combat:
    - { name: 'The yeti uses its Chilling Gaze and then claws the same target', desc: 'If the target is paralyzed, on its next turn the yeti uses Chilling Gaze and its claws against a different target, if one is available. The yeti flees if it takes fire damage while bloodied.' }

---
```statblock
monster: Yeti
```
