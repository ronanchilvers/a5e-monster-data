---
statblock: true
name: 'Goblin Shieldbearer'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Humanoid
cr: 1
ac: 13
hp: 10
hit_dice: 3d6
speed: '30 ft.'
stats:
    - 8
    - 12
    - 10
    - 10
    - 10
    - 10
skillsaves:
    - { stealth: 3 }
senses: 'darkvision 60 ft., passive Perception 10'
languages: 'Common, Goblin'
actions:
    - { name: Shortsword, desc: 'Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 4 (1d6 + 1) piercing damage.' }
    - { name: Shortbow, desc: 'Ranged Weapon Attack: +3 to hit, range 80/320 ft., one target. Hit: 4 (1d6 + 1) piercing damage.' }
    - { name: 'Shield Wall', desc: 'The goblin and a goblin within 5 feet of it gain three-quarters cover.' }
'bonus actions':
    - { name: 'Nimble Escape', desc: 'The goblin takes the Disengage or Hide action.' }
combat:
    - { name: 'Goblins attack only when they outnumber their opponents', desc: 'They employ ambush, firing arrows from hiding and then using Nimble Escape to hide elsewhere. When they can, they turn an aspect of the battle to their advantage, attacking in darkness or from above or amongst traps and hazards. If a goblin is engaged in melee while not in an advantageous position, it attacks with its shortsword and then disengages. Unless a powerful leader forces them to stand their ground, goblins retreat once they no longer outnumber their enemy.' }

---
```statblock
monster: Goblin Shieldbearer
```
