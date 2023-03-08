---
statblock: true
name: Veteran
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 3
ac: 16
hp: 58
hit_dice: '9d8 + 18'
speed: '30 ft.'
stats:
    - 16
    - 12
    - 14
    - 10
    - 10
    - 10
saves:
    - { strength: 5 }
    - { dexterity: 3 }
    - { constitution: 4 }
skillsaves:
    - { athletics: 5 }
    - { intimidation: 2 }
    - { perception: 2 }
    - { survival: 2 }
senses: 'passive Perception 12'
languages: 'any two'
actions:
    - { name: Multiattack, desc: 'The veteran makes two melee attacks.' }
    - { name: Longsword, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) slashing damage.' }
    - { name: Shortsword, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 6 (1d6 + 3) piercing damage.' }
    - { name: 'Heavy Crossbow', desc: 'Ranged Weapon Attack: +3 to hit, range 100/400 ft., one target. Hit: 7 (1d10 + 2) piercing damage.' }
reactions:
    - { name: 'Off-Hand Counter', desc: 'When the veteran is missed by a melee attack by an attacker they can see within 5 feet, the veteran makes a shortsword attack against the attacker.' }
'bonus actions':
    - { name: 'Tactical Movement', desc: "Until the end of the veteran's turn, their Speed is halved and their movement doesn't provoke opportunity attacks." }

---
```statblock
monster: Veteran
```
