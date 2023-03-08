---
statblock: true
name: Lizardfolk
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 1
ac: 14
hp: 22
hit_dice: '4d8 + 4'
speed: '30 ft., swim 30 ft.'
stats:
    - 14
    - 12
    - 12
    - 10
    - 10
    - 8
skillsaves:
    - { perception: 2 }
    - { stealth: 3 }
    - { survival: 2 }
senses: 'passive Perception 12'
languages: Draconic
traits:
    - { name: 'Hold Breath', desc: 'The lizardfolk can hold its breath for 15 minutes.' }
actions:
    - { name: Multiattack, desc: 'The lizardfolk attacks with its club and shield.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) piercing damage, or 9 (2d6 + 2) piercing damage if the attack is made with advantage.' }
    - { name: Club, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) bludgeoning damage.' }
    - { name: Shield, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) bludgeoning damage.' }
    - { name: Javelin, desc: 'Melee or Ranged Weapon Attack: +4 to hit, reach 5 ft. or range 30/120 ft., one target. Hit: 5 (1d6 + 2) piercing damage.' }
combat:
    - { name: 'Lizardfolk hide underwater, making bite attacks with advantage when possible', desc: 'Otherwise, they attack with club and shield. Outside their territory, they retreat once half their number are defeated. When protecting their territory, they fight to the death.' }

---
```statblock
monster: Lizardfolk
```
