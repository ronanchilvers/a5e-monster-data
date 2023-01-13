---
statblock: true
name: 'Jackalope - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Tiny
type: Beast
cr: 3
ac: 14
hp: 55
hit_dice: 10d4+30
speed: '50 ft.'
stats:
    - 11
    - 19
    - 16
    - 6
    - 17
    - 14
damage_resistances: lightning
condition_immunities: stunned
saves:
    strength: 2
    dexterity: 6
    constitution: 5
skillsaves:
    athletics: 2
    deception: 4
    perception: 5
    stealth: 6
    survival: 5
senses: 'passive Perception 17'
languages: 'understands Common but cannot speak'
traits:
    - { name: Evasion, desc: 'If the jackalope is subjected to an effect that allows it to make a Dexterity saving throw to take only half damage, the jackalope instead takes no damage if it succeeds on the saving throw, and only half damage if it fails.' }
    - { name: 'Keen Hearing', desc: 'The jackalope has advantage on Perception checks that rely on hearing.' }
    - { name: Mimicry, desc: 'The jackalope can imitate sounds it hears frequently, such as a simple phrase or an animal noise. Recognizing the sounds as imitation requires a DC 14 Insight check.' }
actions:
    - { name: Gore, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 8 (1d8+4) piercing damage. If the jackalope moves at least 20 feet straight towards the target before the attack, the attack deals an extra 7 (2d6) piercing damage.' }
reactions:
    - { name: 'Uncanny Dodge', desc: "When an attacker the jackalope can see hits it with an attack, the jackalope halves the attack's damage against it." }
'bonus actions':
    - { name: 'Nimble Escape', desc: 'The jackalope takes the Disengage or Hide action.' }

---
```statblock
monster: Jackalope - A5E
```
