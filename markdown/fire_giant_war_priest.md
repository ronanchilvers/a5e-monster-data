---
statblock: true
name: 'Fire Giant War Priest - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Giant
cr: 12
ac: 18
hp: 162
hit_dice: '13d12 + 78'
speed: '30 ft.'
stats:
    - 25
    - 10
    - 22
    - 10
    - 14
    - 12
damage_immunities: fire
saves:
    strength: 11
    dexterity: 4
    constitution: 10
    charisma: 5
skillsaves:
    athletics: 11
    perception: 6
    intimidation: 5
senses: 'passive Perception 16'
languages: Giant
traits:
    - { name: 'Cold Weakness', desc: 'When the fire giant takes cold damage, its speed is reduced by 10 feet until the end of its next turn.' }
actions:
    - { name: Multiattack, desc: 'The giant makes two greatsword attacks.' }
    - { name: Greatsword, desc: 'Melee Weapon Attack: +11 to hit, reach 10 ft., one target. Hit: 28 (6d6 + 7) slashing damage. If the target is a Large or smaller creature, it makes a DC 19 Strength saving throw. On a failure, it is pushed up to 10 feet away from the giant and knocked prone.' }
    - { name: Rock, desc: 'Ranged Weapon Attack: +11 to hit, range 60/240 ft., one target. Hit: 42 (10d6 + 7) bludgeoning damage. If the target is a Large or smaller creature, it makes a DC 19 Strength saving throw, falling prone on a failure.' }
    - { name: 'Sword Sweep (1/Day, While Bloodied)', desc: 'The giant makes a greatsword attack against each creature within 10 feet.' }
    - { name: 'Ignite Blades (1/Day)', desc: "The greatswords of each fire giant of the giant's choice within 30 feet magically kindle into flame. For the next minute, each of their greatsword attacks deal an extra 7 (2d6) fire damage." }
    - { name: 'Pillar of Flame (1/Day)', desc: 'Each creature within a 10-foot-radius, 40-foot-high cylinder centered on a point within 60 feet that the fire giant can see makes a DC 18 Dexterity saving throw, taking 56 (16d6) fire damage on a failed save or half damage on a success. Unattended flammable objects are ignited.' }
reactions:
    - { name: Kick, desc: 'When hit by a melee attack by a Medium or smaller creature the giant can see within 10 feet, the giant kicks its attacker. The attacker makes a DC 19 Dexterity saving throw. On a failure, it takes 14 (3d4 + 7) bludgeoning damage, is pushed up to 20 feet from the giant, and falls prone.' }
combat:
    - { name: "Fire giants close to melee as quickly as possible, throwing rocks only when they can't reach their opponents", desc: 'The giant uses Sword Sweep when surrounded by three or more enemies, or four or more enemies and an ally. Fire giants rarely retreat or surrender, but will do so if reduced to 40 hit points or fewer, or if their enemy has shown the ability to deal consistent cold damage.' }

---
```statblock
monster: Fire Giant War Priest - A5E
```
