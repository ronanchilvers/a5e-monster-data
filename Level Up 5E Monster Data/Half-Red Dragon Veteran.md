---
statblock: true
name: 'Half-Red Dragon Veteran'
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
damage_resistances: fire
saves:
    - { strength: 5 }
    - { dexterity: 3 }
    - { constitution: 4 }
skillsaves:
    - { athletics: 5 }
    - { intimidation: 2 }
    - { perception: 2 }
    - { survival: 2 }
senses: 'blindsight 10 ft., darkvision 60 ft., passive Perception 12'
languages: 'Draconic plus any two'
actions:
    - { name: Multiattack, desc: 'The veteran makes two melee attacks.' }
    - { name: Longsword, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) slashing damage.' }
    - { name: Shortsword, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 6 (1d6 + 3) piercing damage.' }
    - { name: 'Heavy Crossbow', desc: 'Ranged Weapon Attack: +3 to hit, range 100/400 ft., one target. Hit: 6 (1d10 + 1) piercing damage.' }
    - { name: 'Fire Breath (Recharge 5-6)', desc: 'The veteran exhales a blast of fire that fills a 15-foot cone. Each creature in that area makes a DC 15 Dexterity saving throw, taking 24 (7d6) fire damage on a failed save or half damage on a success. A creature who fails the saving throw also suffers 5 (1d10) ongoing fire damage. At the end of each of its turns, it can repeat the saving throw, ending the ongoing damage on a success. This fire can also be put out in typical ways, such as immersion in water, and a creature who uses an action to drop prone can put out the fire with a DC 10 Dexterity saving throw.' }
reactions:
    - { name: 'Off-Hand Counter', desc: 'When the veteran is missed by a melee attack by an attacker it can see within 5 feet, the veteran makes a shortsword attack against the attacker.' }
'bonus actions':
    - { name: 'Tactical Movement', desc: "Until the end of the veteran's turn, its Speed is halved and its movement doesn't provoke opportunity attacks." }

---
```statblock
monster: Half-Red Dragon Veteran
```
