---
statblock: true
name: 'Goblin Boss - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Humanoid
cr: 1
ac: 16
hp: 24
hit_dice: 7d6
speed: '30 ft.'
stats:
    - 12
    - 14
    - 10
    - 12
    - 12
    - 12
skillsaves:
    - { stealth: 4 }
    - { intimidation: 3 }
senses: 'darkvision 60 ft., passive Perception 11'
languages: 'Common, Goblin'
actions:
    - { name: Multiattack, desc: 'The goblin attacks twice with its scimitar.' }
    - { name: Scimitar, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) slashing damage.' }
    - { name: Shortbow, desc: 'Ranged Weapon Attack: +4 to hit, range 80/320 ft., one target. Hit: 5 (1d6 + 2) piercing damage.' }
    - { name: 'Command Minions', desc: 'Up to 3 goblins within 30 feet that can hear or see it use their reactions to make a single melee attack each.' }
'bonus actions':
    - { name: 'Nimble Escape', desc: 'The goblin takes the Disengage or Hide action.' }
combat:
    - { name: 'Goblins attack only when they outnumber their opponents', desc: 'They employ ambush, firing arrows from hiding and then using Nimble Escape to hide elsewhere. When they can, they turn an aspect of the battle to their advantage, attacking in darkness or from above or amongst traps and hazards. If a goblin is engaged in melee while not in an advantageous position, it attacks with its shortsword and then disengages. Unless a powerful leader forces them to stand their ground, goblins retreat once they no longer outnumber their enemy.' }

---
```statblock
monster: Goblin Boss - A5E
```
