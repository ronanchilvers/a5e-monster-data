---
statblock: true
name: 'Bunyip - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Beast
cr: 8
ac: 14
hp: 150
hit_dice: 12d12+72
speed: '20 ft., swim 50 ft.'
stats:
    - 23
    - 15
    - 22
    - 3
    - 12
    - 8
damage_resistances: 'cold, thunder'
saves:
    - { dexterity: 5 }
    - { wisdom: 4 }
skillsaves:
    - { athletics: 9 }
    - { perception: 4 }
    - { stealth: 5 }
    - { survival: 4 }
senses: 'darkvision 120 ft., passive Perception 16'
traits:
    - { name: Brave, desc: 'The bunyip has advantage on saving throws against being frightened.' }
    - { name: 'Hold Breath', desc: 'The bunyip can hold its breath for 1 hour.' }
    - { name: 'Keen Hearing and Smell', desc: 'The bunyip has advantage on Perception checks that rely on hearing or smell.' }
actions:
    - { name: Multiattack, desc: 'The bunyip makes a bite attack and two slam attacks.' }
    - { name: Bite, desc: "Melee Weapon Attack: +9 to hit, reach 10 ft., one target. Hit: 19 (2d12+6) piercing damage, and the target is grappled (escape DC 17). Until this grapple ends, the target is restrained, and the bunyip can't bite another target." }
    - { name: Slam, desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one target. Hit: 17 (2d10+6) bludgeoning damage.' }
'bonus actions':
    - { name: 'Terrifying Howl', desc: "The bunyip unleashes a terrifying howl. Each creature of its choice within 120 feet that can see and hear it makes a DC 17 Wisdom saving throw, becoming frightened for 1 minute on a failure. A creature repeats the saving throw at the end of each of its turns, ending the effect on itself on a success. If a creature's saving throw is successful or the effect ends for it, the creature is immune to the bunyip's Terrifying Howl for the next 24 hours." }

---
```statblock
monster: Bunyip - A5E
```
