---
statblock: true
name: 'Skeletal Champion - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 3
ac: 15
hp: 58
hit_dice: '9d8 + 18'
speed: '30 ft.'
stats:
    - 16
    - 16
    - 14
    - 6
    - 8
    - 5
damage_immunities: poison
condition_immunities: 'fatigue, poisoned'
'damage vulenrabilities': bludgeoning
saves:
    - { strength: 5 }
    - { dexterity: 5 }
    - { constitution: 4 }
senses: 'darkvision 60 ft., passive Perception 9'
languages: "understands the languages it knew in life but can't speak"
traits:
    - { name: 'Undead Nature', desc: "A skeleton doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The skeleton makes two melee attacks.' }
    - { name: Longsword, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) slashing damage.' }
    - { name: 'Heavy Crossbow', desc: 'Ranged Weapon Attack: +5 to hit, range 100/400 ft., one target. Hit: 8 (1d10 + 3) piercing damage.' }
reactions:
    - { name: 'Shielding Riposte', desc: "When a creature within the skeleton's reach misses with a melee attack against the skeleton or a creature within 5 feet, the skeleton makes a longsword attack against the attacker. The skeleton must be wielding a longsword to use this reaction." }
combat:
    - { name: 'Skeletons follow the last order given them by their creator: defend the gates, attack trespassers, etc', desc: "Without orders, they attack any creatures that approach them. Skeletons don't retreat unless commanded to do so." }

---
```statblock
monster: Skeletal Champion - A5E
```
